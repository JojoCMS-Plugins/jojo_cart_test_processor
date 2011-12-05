<form action="{$SECUREURL}/cart/process/{$token}/" method="post">
  <input type="hidden" name="handler" value="test" />
  <div class="box">
    <h2>Test payment processor</h2>
    <p>The test processor allows you to test your payment process without using real transactions. It works in the same way as the other payment processor plugins, but doesn't contact any external provider to authorize a payment. Make sure this plugin is uninstalled before going live. Use the options below to test the accepted / declined functionality of the site.</p>
    <h3>Payment outcome</h3>
    <label><input type="radio" name="outcome" value="accepted" checked="checked" /> Accepted</label>
    <label><input type="radio" name="outcome" value="declined" /> Declined</label>
  <div style="text-align: center;clear:both">
    <input type="submit" name="submit" value="Process" />
  </div>
  </div>
  
</form>