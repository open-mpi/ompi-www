<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 21 23:51:33 2005" -->
<!-- isoreceived="20051122045133" -->
<!-- sent="Mon, 21 Nov 2005 21:51:21 -0700" -->
<!-- isosent="20051122045121" -->
<!-- name="Ralph H. Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Process for modifying APIs" -->
<!-- id="6.2.3.4.2.20051121213114.01fcef40_at_pobox1663.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>From:</strong> Ralph H. Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-21 23:51:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0541.php">Jeff Squyres: "1.0.1rc2 now available"</a>
<li><strong>Previous message:</strong> <a href="0539.php">Jeff Squyres: "1.0.1rc1 now available"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo all
<br>
<p>As you may have seen from earlier emails, I encountered some 
<br>
difficulty in modifying existing APIs within the streamlined build 
<br>
system. After some effort, I think I have defined a method for 
<br>
modifying the API-level of a subsystem that gets around some of the 
<br>
problems. I thought I might share it so others don't make the same 
<br>
mistakes I did.
<br>
<p>The process involves multiple steps:
<br>
<p>1. Do NOT modify the existing API function that you want to change. 
<br>
Instead, create a new function with a new name. If you are working in 
<br>
a framework, put this in the framework's base, but do NOT add it to 
<br>
the framework's API definition at this time. Since it is a new 
<br>
function, nobody will have called it yet, so you won't have to make 
<br>
any changes to the tree to get it to compile. Be sure to add any 
<br>
initialization the function requires to the respective open function. 
<br>
For any global variables needed by the function, create new ones and 
<br>
give them distinctive names - we'll revise the names later to remove 
<br>
any duplications.
<br>
<p>2. Test the new function with a unit test (or your favorite optional 
<br>
approach) . Since the new function is in the base of a framework, it 
<br>
will be statically linked, so you can call it without concern once 
<br>
that framework has been initialized.
<br>
<p>3. Once you are convinced the new function is working properly and 
<br>
that its API is solid, convert a few of the functions that call the 
<br>
old API function to the new one and test that the combination does 
<br>
what you want. Since you built the new API as a base function, you 
<br>
can call it directly for now - we'll fix it later.
<br>
<p>4. Now that things look solid, move the new API function to the API 
<br>
definition and replace the old one. This will force you to modify 
<br>
every place in the tree that calls the function, but (a) at least now 
<br>
you only have to do it once, and (b) you know that your new function 
<br>
works, so any problems are likely to lie in the way it is called. Be 
<br>
sure to resolve any duplications in global variables, and to update 
<br>
the respective open function accordingly.
<br>
<p><p>Just a suggested process based on some painful experience.
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0541.php">Jeff Squyres: "1.0.1rc2 now available"</a>
<li><strong>Previous message:</strong> <a href="0539.php">Jeff Squyres: "1.0.1rc1 now available"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
