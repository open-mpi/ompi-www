<?
$subject_val = "Re: [OMPI users] Sending large boradcasts";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  4 08:34:46 2011" -->
<!-- isoreceived="20110104133446" -->
<!-- sent="Tue, 4 Jan 2011 08:34:41 -0500" -->
<!-- isosent="20110104133441" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Sending large boradcasts" -->
<!-- id="34666D93-3F3A-4DFE-97F6-A9B1ABE9F63F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D224A51.9060909_at_anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] Sending large boradcasts<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-04 08:34:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15267.php">Paul Kapinos: "[OMPI users] v1.5.1: configuration failed if compiling on CentOS 5.5 with defauld GCC"</a>
<li><strong>Previous message:</strong> <a href="15265.php">Ralph Castain: "Re: [OMPI users] Can openmpi run on two different operating system?"</a>
<li><strong>In reply to:</strong> <a href="15260.php">David Singleton: "Re: [OMPI users] Sending large boradcasts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15269.php">Brock Palen: "Re: [OMPI users] Sending large boradcasts"</a>
<li><strong>Reply:</strong> <a href="15269.php">Brock Palen: "Re: [OMPI users] Sending large boradcasts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 3, 2011, at 5:14 PM, David Singleton wrote:
<br>
<p><span class="quotelev1">&gt; That message should only be 2MB.  Are you sure its not a mismatch of
</span><br>
<span class="quotelev1">&gt; message lengths in MPI_Bcast calls?
</span><br>
<p>+1 -- this is MB, not GB.  The error message implies that one (or more?) MPI processes provided a size that was too small to receive.  Or, more specifically, that not all MPI processes in the broadcast specified the same (count,datatype) tuple.
<br>
<p><span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 01/04/2011 03:47 AM, Brock Palen wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I have a user who reports that sending a broadcast of
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 540*1080 of reals (just over 2GB) fails with this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Bcast
</span><br>
<span class="quotelev2">&gt;&gt; *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I was reading the archives and there appears to be an issue with large messages.  I was a little confused, is there a way to send messages larger than 2GB?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The user has access to some IB machines, per a note in the archives there was an issue with writev() would this issue only be related to messages over ethernet?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks just trying to get some clarification.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev2">&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15267.php">Paul Kapinos: "[OMPI users] v1.5.1: configuration failed if compiling on CentOS 5.5 with defauld GCC"</a>
<li><strong>Previous message:</strong> <a href="15265.php">Ralph Castain: "Re: [OMPI users] Can openmpi run on two different operating system?"</a>
<li><strong>In reply to:</strong> <a href="15260.php">David Singleton: "Re: [OMPI users] Sending large boradcasts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15269.php">Brock Palen: "Re: [OMPI users] Sending large boradcasts"</a>
<li><strong>Reply:</strong> <a href="15269.php">Brock Palen: "Re: [OMPI users] Sending large boradcasts"</a>
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
