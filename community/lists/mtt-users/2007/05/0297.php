<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 17 10:24:32 2007" -->
<!-- isoreceived="20070517142432" -->
<!-- sent="Thu, 17 May 2007 07:24:06 -0700" -->
<!-- isosent="20070517142406" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] How can I know the path to mpicc ?" -->
<!-- id="AC772252-424C-4110-8B48-2CA41016C1B0_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="6C2C79E72C305246B504CBA17B5500C90182546D_at_mtlexch01.mtl.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-17 10:24:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0298.php">Shai Venter: "Re: [MTT users] mtt test build for IMB-MPI1 fails,"</a>
<li><strong>Previous message:</strong> <a href="0296.php">Shai Venter: "[MTT users] How can I know the path to mpicc ?"</a>
<li><strong>In reply to:</strong> <a href="0296.php">Shai Venter: "[MTT users] How can I know the path to mpicc ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
mpicc should be in the path already; MTT should take care of that for  
<br>
you.  Here's what I have in the Cisco INI file for the IMB test build  
<br>
section:
<br>
<p>[Test build: imb]
<br>
test_get = imb
<br>
save_stdout_on_success = 1
<br>
merge_stdout_stderr = 1
<br>
<p>module = Shell
<br>
shell_build_command = &lt;&lt;EOT
<br>
cd src
<br>
make clean IMB-MPI1
<br>
EOT
<br>
<p><p>On May 17, 2007, at 7:20 AM, Shai Venter wrote:
<br>
<p><span class="quotelev1">&gt; Hi there !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using mtt, I&#146;m trying to build and run  the IMB-MPI1 test.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need to provide to the IMB make file,  a path to the bin dir  
</span><br>
<span class="quotelev1">&gt; where mpicc compiler is.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How do I do that, when mtt creat it&#146;s own directory trees for mpi  
</span><br>
<span class="quotelev1">&gt; installations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mtt gets the test sources for that matter, but fails to build.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shai Venter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Q.A
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mellanox Technologies, Ltd.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.mellanox.com
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +972 (0)4  9097200 ext. 252
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +972 (0)50 2888637
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0298.php">Shai Venter: "Re: [MTT users] mtt test build for IMB-MPI1 fails,"</a>
<li><strong>Previous message:</strong> <a href="0296.php">Shai Venter: "[MTT users] How can I know the path to mpicc ?"</a>
<li><strong>In reply to:</strong> <a href="0296.php">Shai Venter: "[MTT users] How can I know the path to mpicc ?"</a>
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
