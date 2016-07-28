<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 13 16:30:03 2007" -->
<!-- isoreceived="20070213213003" -->
<!-- sent="Tue, 13 Feb 2007 16:29:55 -0500 (EST)" -->
<!-- isosent="20070213212955" -->
<!-- name="Steven A. DuChene" -->
<!-- email="linux-clusters_at_[hidden]" -->
<!-- subject="[OMPI users] where do the openmpi profile.d scripts get created?" -->
<!-- id="14757771.1171402195189.JavaMail.root_at_mswamui-swiss.atl.sa.earthlink.net" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Steven A. DuChene (<em>linux-clusters_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-13 16:29:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2688.php">Troy Telford: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
<li><strong>Previous message:</strong> <a href="2686.php">Weikuan Yu: "[OMPI users] HotI 2007 Call for papers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2704.php">Jeff Squyres: "Re: [OMPI users] where do the openmpi profile.d scripts get created?"</a>
<li><strong>Reply:</strong> <a href="2704.php">Jeff Squyres: "Re: [OMPI users] where do the openmpi profile.d scripts get created?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I discovered the hard way that there are openmpi profile.d scripts that get
<br>
packaged into openmpi rpm files. The reason this became a painful issue
<br>
for our cluster is that it seems the csh profile.d script that gets installed
<br>
with the openmpi-runtime-1.1.4 is defective. If it gets sourced into a user's
<br>
environment it makes tcsh on linux error out with a &quot;if: Badly formed number&quot;
<br>
<p>I want to be able to alter the spec file that builds the rpm so I can have it
<br>
automagically incorperate the patch we worked up to fix this issue but I have
<br>
not been able to figure out where in the openmpi sources that the profile.d
<br>
scripts for csh and sh get generated.
<br>
<p>We had to patch the openmpi-1.1.4.csh script as follows:
<br>
<p>-if (&quot;&quot;) then
<br>
-    setenv PATH ${PATH}:/opt/openmpi-g95/1.1.4/bin/
<br>
+if ( $?PATH ) then
<br>
+    setenv PATH ${PATH}:/opt/openmpi/1.1.4/bin/
<br>
&nbsp;endif
<br>
-if (&quot;1LD_LIBRARY_PATH&quot;) then
<br>
-    if (&quot;&quot;) then
<br>
-        setenv LD_LIBRARY_PATH ${LD_LIBRARY_PATH}:/opt/openmpi-g95/1.1.4/lib
<br>
-    endif
<br>
+if ( $?LD_LIBRARY_PATH ) then
<br>
+        setenv LD_LIBRARY_PATH ${LD_LIBRARY_PATH}:/opt/openmpi/1.1.4/lib
<br>
&nbsp;endif
<br>
-if (&quot;1MANPATH&quot;) then
<br>
-    if (&quot;&quot;) then
<br>
-        setenv MANPATH ${MANPATH}:/opt/openmpi-g95/1.1.4/man
<br>
-    endif
<br>
+if ( $?MANPATH ) then
<br>
+        setenv MANPATH ${MANPATH}:/opt/openmpi/1.1.4/man
<br>
&nbsp;endif
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2688.php">Troy Telford: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
<li><strong>Previous message:</strong> <a href="2686.php">Weikuan Yu: "[OMPI users] HotI 2007 Call for papers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2704.php">Jeff Squyres: "Re: [OMPI users] where do the openmpi profile.d scripts get created?"</a>
<li><strong>Reply:</strong> <a href="2704.php">Jeff Squyres: "Re: [OMPI users] where do the openmpi profile.d scripts get created?"</a>
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
