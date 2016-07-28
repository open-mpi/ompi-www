<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 15 09:12:40 2005" -->
<!-- isoreceived="20051115141240" -->
<!-- sent="Tue, 15 Nov 2005 07:12:38 -0700" -->
<!-- isosent="20051115141238" -->
<!-- name="Ralph H. Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="New build methodology" -->
<!-- id="6.2.3.4.2.20051115070627.0202d880_at_pobox1663.lanl.gov" -->
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
<strong>Date:</strong> 2005-11-15 09:12:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0525.php">Ralf Wildenhues: "Re:  New build methodology"</a>
<li><strong>Previous message:</strong> <a href="0523.php">Jeff Squyres: "1.0rc5 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0525.php">Ralf Wildenhues: "Re:  New build methodology"</a>
<li><strong>Reply:</strong> <a href="0525.php">Ralf Wildenhues: "Re:  New build methodology"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo folks
<br>
<p>While I generally find the new build methodology (i.e., reducing the 
<br>
number of makefiles) has little impact on me, I have now encountered 
<br>
one problem that causes a significant difficulty. In trying to work 
<br>
on a revised data packing system for the orte part of the branch, I 
<br>
now find that I cannot compile and debug the dps *until* I have 
<br>
completely revised all the rest of the system that uses it. In other 
<br>
words, having made a change to the dps, I first have to go through 
<br>
every function that uses it and make the tree conform BEFORE I can 
<br>
even begin to debug and test the revisions in the dps itself.
<br>
<p>The problem this creates is that - unless I am absolutely correct in 
<br>
my first iteration on the changes - I find myself repeatedly going 
<br>
through the tree, modifying the API calls into the dps, getting 
<br>
everything to compile, then trying the dps, .....discovering that I 
<br>
need to make a change, going through the entire tree to modify 
<br>
everything again, trying the change,.....
<br>
<p>You get the picture. Frankly, from what I'm seeing, I am not sure the 
<br>
changed build system is worth the lost productivity. It works fine if 
<br>
you are only making small changes - but in cases like I'm currently 
<br>
in, it actually severely impacts productivity.
<br>
<p>Perhaps an option to create a local makefile would help? Not sure if 
<br>
that is possible, but it sure would ease my pain!
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0525.php">Ralf Wildenhues: "Re:  New build methodology"</a>
<li><strong>Previous message:</strong> <a href="0523.php">Jeff Squyres: "1.0rc5 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0525.php">Ralf Wildenhues: "Re:  New build methodology"</a>
<li><strong>Reply:</strong> <a href="0525.php">Ralf Wildenhues: "Re:  New build methodology"</a>
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
