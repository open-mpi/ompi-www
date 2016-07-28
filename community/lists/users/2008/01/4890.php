<?
$subject_val = "Re: [OMPI users] flash2.5 with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 25 17:18:18 2008" -->
<!-- isoreceived="20080125221818" -->
<!-- sent="Fri, 25 Jan 2008 17:17:08 -0500" -->
<!-- isosent="20080125221708" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] flash2.5 with openmpi" -->
<!-- id="39096186-A572-4983-AFCD-E38BD7B727EF_at_umich.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="479A5C3D.8010205_at_uark.edu" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-25 17:17:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4891.php">Mostyn Lewis: "Re: [OMPI users] openmpi-1.2.4-1/OFED 1.2.5.4 ConnectX MPI_Reduce hang"</a>
<li><strong>Previous message:</strong> <a href="4889.php">Jeff Pummill: "Re: [OMPI users] flash2.5 with openmpi"</a>
<li><strong>In reply to:</strong> <a href="4889.php">Jeff Pummill: "Re: [OMPI users] flash2.5 with openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I dont think so,  we are using the hdf5 serial io module, our hosts  
<br>
have just 1 gb ethernet and our OSS has gigbit also. But again our  
<br>
lustre setup is brand-new with only a few users so its effectively Idle.
<br>
<p>We also see the same behavior on NFS v3 backed by OnStor bobcats.
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Jan 25, 2008, at 5:01 PM, Jeff Pummill wrote:
<br>
<p><span class="quotelev1">&gt; Brock,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only thing that came to mind was that possibly on the second  
</span><br>
<span class="quotelev1">&gt; dump, the I/O was substantial enough to cause an overload of the  
</span><br>
<span class="quotelev1">&gt; OSS's (I/O servers) resulting in a process or task hang? Can you  
</span><br>
<span class="quotelev1">&gt; tell if your Lustre environment is getting overwhelmed when the  
</span><br>
<span class="quotelev1">&gt; Open MPI / FLASH combination checkpoints the second time? I know  
</span><br>
<span class="quotelev1">&gt; you write files &gt; 2gb all the time, but if this particular  
</span><br>
<span class="quotelev1">&gt; combination is delivering that amount of data in a much shorter  
</span><br>
<span class="quotelev1">&gt; period of time.....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just a thought :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff F. Pummill
</span><br>
<span class="quotelev1">&gt; University of Arkansas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I started a new run with some changes,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Shortening the run wont work well, it takes 3 days just to get
</span><br>
<span class="quotelev2">&gt;&gt; through the AMR.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
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
<span class="quotelev2">&gt;&gt; On Jan 25, 2008, at 3:01 PM, Daniel Pfenniger wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brock Palen wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is anyone using flash with openMPI?  we are here, but when ever it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tries to write its second checkpoint file it segfaults once it gets
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to 2.2GB always in the same location.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Debugging is a pain as it takes 3 days to get to that point.  Just
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wondering if anyone else has seen this same behavior.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just to make testing faster you might think reducing the file output
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interval (trstrt or nrstrt parameters in flash.par), and decrease  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; resolution (lrefine_max) to produce smaller files and to see whether
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the problem is related with the file size.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	Dan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4890/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4891.php">Mostyn Lewis: "Re: [OMPI users] openmpi-1.2.4-1/OFED 1.2.5.4 ConnectX MPI_Reduce hang"</a>
<li><strong>Previous message:</strong> <a href="4889.php">Jeff Pummill: "Re: [OMPI users] flash2.5 with openmpi"</a>
<li><strong>In reply to:</strong> <a href="4889.php">Jeff Pummill: "Re: [OMPI users] flash2.5 with openmpi"</a>
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
