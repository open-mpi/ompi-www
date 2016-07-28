<?
$subject_val = "Re: [OMPI devel] RFC: Resilient ORTE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 23 10:16:27 2011" -->
<!-- isoreceived="20110623141627" -->
<!-- sent="Thu, 23 Jun 2011 10:16:22 -0400" -->
<!-- isosent="20110623141622" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Resilient ORTE" -->
<!-- id="BANLkTikicWcV8zJBqJ3yGY==Ga9UYqjKzA_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5936E3B9A2464940A9DCDEDB5D214FE5_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Resilient ORTE<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-23 10:16:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9403.php">Jeff Squyres: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Previous message:</strong> <a href="9401.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9401.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9404.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9404.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So I finally got a chance to test the branch this morning. I cannot
<br>
get it to work. Maybe I'm doing some wrong, missing some MCA
<br>
parameter?
<br>
<p>-------------------------
<br>
[jjhursey_at_smoky-login1 resilient-orte] hg summary
<br>
parent: 2:c550cf6ed6a2 tip
<br>
&nbsp;Newest version. Synced with trunk r24785.
<br>
branch: default
<br>
commit: 1 modified, 8097 unknown
<br>
update: (current)
<br>
-------------------------
<br>
(the 1 modified was the test program attached)
<br>
<p>Attached is a modified version of the orte_abort.c program found in
<br>
${top}/orte/test/system. This program is ORTE only, and registers the
<br>
errmgr callback to trigger correct termination. You will need to
<br>
configure Open MPI with '--with-devel-headers' to build this. But then
<br>
you can compile with:
<br>
&nbsp;&nbsp;ortecc -g    orte_abort.c   -o orte_abort
<br>
<p>These are the configure options that I used:
<br>
&nbsp;--with-devel-headers --enable-binaries --disable-io-romio
<br>
--enable-contrib-no-build=vt --enable-debug CC=gcc CXX=g++
<br>
F77=gfortran FC=gfortran
<br>
<p><p>If the HNP has no processes on it - I get a hang:
<br>
-------------------------------
<br>
mpirun -np 4 --nolocal orte_abort
<br>
orte_abort: Name [[60121,1],0,0] Host: smoky13 Pid 3688 -- Initalized
<br>
orte_abort: Name [[60121,1],1,0] Host: smoky13 Pid 3689 -- Initalized
<br>
orte_abort: Name [[60121,1],2,0] Host: smoky13 Pid 3690 -- Initalized
<br>
orte_abort: Name [[60121,1],3,0] Host: smoky13 Pid 3691 -- Initalized
<br>
orte_abort: Name [[60121,1],3,0] Host: smoky13 Pid 3691 -- Calling Abort
<br>
mpirun: killing job...
<br>
<p>[smoky14:04002] [[60121,0],0,0] ORTE_ERROR_LOG: Data unpack would read
<br>
past end of buffer in file errmgr_hnp.c at line 824
<br>
[smoky14:04002] [[60121,0],0,0] ORTE_ERROR_LOG: Data unpack would read
<br>
past end of buffer in file orted/orted_comm.c at line 1341
<br>
mpirun: abort is already in progress...hit ctrl-c again to forcibly terminate
<br>
<p>[jjhursey_at_smoky14 system] echo $?
<br>
1
<br>
-------------------------------
<br>
<p>If the HNP has processes on it, but not the one that aborted - I get a hang:
<br>
-------------------------------
<br>
[jjhursey_at_smoky14 system] mpirun -np 4 --npernode 2 orte_abort
<br>
orte_abort: Name [[60302,1],0,0] Host: smoky14 Pid 3830 -- Initalized
<br>
orte_abort: Name [[60302,1],1,0] Host: smoky14 Pid 3831 -- Initalized
<br>
orte_abort: Name [[60302,1],2,0] Host: smoky13 Pid 3484 -- Initalized
<br>
orte_abort: Name [[60302,1],3,0] Host: smoky13 Pid 3485 -- Initalized
<br>
orte_abort: Name [[60302,1],3,0] Host: smoky13 Pid 3485 -- Calling Abort
<br>
mpirun: killing job...
<br>
<p>[smoky14:03829] [[60302,0],0,0]-[[60302,1],1,0] mca_oob_tcp_msg_recv:
<br>
readv failed: Connection reset by peer (104)
<br>
[smoky14:03829] [[60302,0],0,0]-[[60302,1],0,0] mca_oob_tcp_msg_recv:
<br>
readv failed: Connection reset by peer (104)
<br>
[smoky14:03829] [[60302,0],0,0] ORTE_ERROR_LOG: Data unpack would read
<br>
past end of buffer in file errmgr_hnp.c at line 824
<br>
[smoky14:03829] [[60302,0],0,0] ORTE_ERROR_LOG: Data unpack would read
<br>
past end of buffer in file orted/orted_comm.c at line 1341
<br>
mpirun: abort is already in progress...hit ctrl-c again to forcibly terminate
<br>
<p>[jjhursey_at_smoky14 system] echo $?
<br>
1
<br>
--------------------------------
<br>
<p>If the HNP has processes on it, and it is the one that aborted - I get
<br>
immediate return, but no callback:
<br>
--------------------------------
<br>
[jjhursey_at_smoky14 system] mpirun -np 4 --npernode 4 orte_abort
<br>
orte_abort: Name [[60292,1],0,0] Host: smoky14 Pid 3840 -- Initalized
<br>
orte_abort: Name [[60292,1],1,0] Host: smoky14 Pid 3841 -- Initalized
<br>
orte_abort: Name [[60292,1],2,0] Host: smoky14 Pid 3842 -- Initalized
<br>
orte_abort: Name [[60292,1],3,0] Host: smoky14 Pid 3843 -- Initalized
<br>
orte_abort: Name [[60292,1],3,0] Host: smoky14 Pid 3843 -- Calling Abort
<br>
[jjhursey_at_smoky14 system] echo $?
<br>
3
<br>
--------------------------------
<br>
<p>Any ideas on what I might be doing wrong?
<br>
<p>I tried with both calling 'orte_errmgr.abort(ORTE_PROC_MY_NAME-&gt;vpid,
<br>
NULL);' and 'kill(getpid(), SIGKILL);' and got the same behavior.
<br>
<p>-- Josh
<br>
<p><p><p>On Thu, Jun 23, 2011 at 9:58 AM, Wesley Bland &lt;wbland_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Last reminder (I hope). RFC goes in a COB today.
</span><br>
<span class="quotelev1">&gt; Wesley
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>

</pre>
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9402/orte_abort.c">orte_abort.c</a>
</ul>
<!-- attachment="orte_abort.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9403.php">Jeff Squyres: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Previous message:</strong> <a href="9401.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9401.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9404.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9404.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
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
