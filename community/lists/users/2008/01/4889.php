<?
$subject_val = "Re: [OMPI users] flash2.5 with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 25 17:01:58 2008" -->
<!-- isoreceived="20080125220158" -->
<!-- sent="Fri, 25 Jan 2008 16:01:33 -0600" -->
<!-- isosent="20080125220133" -->
<!-- name="Jeff Pummill" -->
<!-- email="jpummil_at_[hidden]" -->
<!-- subject="Re: [OMPI users] flash2.5 with openmpi" -->
<!-- id="479A5C3D.8010205_at_uark.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C8867D8-8859-4143-A124-DD7745D63577_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] flash2.5 with openmpi<br>
<strong>From:</strong> Jeff Pummill (<em>jpummil_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-25 17:01:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4890.php">Brock Palen: "Re: [OMPI users] flash2.5 with openmpi"</a>
<li><strong>Previous message:</strong> <a href="4888.php">Brock Palen: "Re: [OMPI users] flash2.5 with openmpi"</a>
<li><strong>In reply to:</strong> <a href="4888.php">Brock Palen: "Re: [OMPI users] flash2.5 with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4890.php">Brock Palen: "Re: [OMPI users] flash2.5 with openmpi"</a>
<li><strong>Reply:</strong> <a href="4890.php">Brock Palen: "Re: [OMPI users] flash2.5 with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brock,
<br>
<p>The only thing that came to mind was that possibly on the second dump, 
<br>
the I/O was substantial enough to cause an overload of the OSS's (I/O 
<br>
servers) resulting in a process or task hang? Can you tell if your 
<br>
Lustre environment is getting overwhelmed when the Open MPI / FLASH 
<br>
combination checkpoints the second time? I know you write files &gt; 2gb 
<br>
all the time, but if this particular combination is delivering that 
<br>
amount of data in a much shorter period of time.....
<br>
<p>Just a thought :-\
<br>
<p><p>Jeff F. Pummill
<br>
University of Arkansas
<br>
//
<br>
<p><p>Brock Palen wrote:
<br>
<span class="quotelev1">&gt; I started a new run with some changes,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shortening the run wont work well, it takes 3 days just to get  
</span><br>
<span class="quotelev1">&gt; through the AMR.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 25, 2008, at 3:01 PM, Daniel Pfenniger wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is anyone using flash with openMPI?  we are here, but when ever it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tries to write its second checkpoint file it segfaults once it gets
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to 2.2GB always in the same location.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Debugging is a pain as it takes 3 days to get to that point.  Just
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wondering if anyone else has seen this same behavior.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; Just to make testing faster you might think reducing the file output
</span><br>
<span class="quotelev2">&gt;&gt; interval (trstrt or nrstrt parameters in flash.par), and decrease the
</span><br>
<span class="quotelev2">&gt;&gt; resolution (lrefine_max) to produce smaller files and to see whether
</span><br>
<span class="quotelev2">&gt;&gt; the problem is related with the file size.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	Dan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4889/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4890.php">Brock Palen: "Re: [OMPI users] flash2.5 with openmpi"</a>
<li><strong>Previous message:</strong> <a href="4888.php">Brock Palen: "Re: [OMPI users] flash2.5 with openmpi"</a>
<li><strong>In reply to:</strong> <a href="4888.php">Brock Palen: "Re: [OMPI users] flash2.5 with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4890.php">Brock Palen: "Re: [OMPI users] flash2.5 with openmpi"</a>
<li><strong>Reply:</strong> <a href="4890.php">Brock Palen: "Re: [OMPI users] flash2.5 with openmpi"</a>
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
