<?
$subject_val = "Re: [OMPI users] How to run open MPI without ipoib";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 13 21:38:49 2011" -->
<!-- isoreceived="20111014013849" -->
<!-- sent="Thu, 13 Oct 2011 19:38:40 -0600" -->
<!-- isosent="20111014013840" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to run open MPI without ipoib" -->
<!-- id="09EC181D-C7F1-4D88-A029-1FE4313CBDE6_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAPOYHva_EavRwe5iCE_fTpe4ytfaX2OuBaYjif_DSSd9j5z+Cg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to run open MPI without ipoib<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-13 21:38:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17538.php">Chris Cooper: "[OMPI users] gpudirect p2p?"</a>
<li><strong>Previous message:</strong> <a href="17536.php">bhimesh akula: "[OMPI users] How to run open MPI without ipoib"</a>
<li><strong>In reply to:</strong> <a href="17536.php">bhimesh akula: "[OMPI users] How to run open MPI without ipoib"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
First, OMPI does -not- require you to use ipoib.
<br>
<p>With that command line, both procs will be running on remotehostip. I don't believe openib has a loopback interface, so you'll need the shared memory btl so procs co-located on a node can talk to each other. In other words, you need
<br>
<p>-mca btl sm,openib,self
<br>
<p>Finally, have you checked your params? I'm unaware of any param btl_openib_if_include, though maybe I just missed it. Use
<br>
<p>ompi_info --param btl openib
<br>
<p>to see the supported values. Remember, we don't check your params for syntax errors - if it isn't recognized, we just ignore it.
<br>
<p><p>On Oct 13, 2011, at 7:12 PM, bhimesh akula wrote:
<br>
<p><span class="quotelev1">&gt; HI,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have multi node set up and they are back to back connected.we are trying to run open MPI without using ipoib means not using normal ethernet interface instead it has to go through our uverbs interface.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is the command i tried ...
</span><br>
<span class="quotelev1">&gt; &quot;mpirun --prefix /usr/local/ -np 2 --mca btl openib,self --mca
</span><br>
<span class="quotelev1">&gt; btl_openib_cpc_include rdmacm --mca btl_openib_if_include &quot;mthca_0:1&quot; -H remotehostip osu_bw .
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here in above command i have given again IP only as no idea on what parameters has to be given to mention remote host(like IP any other parameter to identify remote host while running MPI without ipoib).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And also please give me a way to run the open MPI without ipoib and using our ibverbs interface on multi node set up.please help me on this ASAP ...
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17538.php">Chris Cooper: "[OMPI users] gpudirect p2p?"</a>
<li><strong>Previous message:</strong> <a href="17536.php">bhimesh akula: "[OMPI users] How to run open MPI without ipoib"</a>
<li><strong>In reply to:</strong> <a href="17536.php">bhimesh akula: "[OMPI users] How to run open MPI without ipoib"</a>
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
