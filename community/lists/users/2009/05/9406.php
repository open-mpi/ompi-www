<?
$subject_val = "Re: [OMPI users] FW: hanging after many comm create/destroy's";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 11:23:01 2009" -->
<!-- isoreceived="20090520152301" -->
<!-- sent="Wed, 20 May 2009 11:22:56 -0400" -->
<!-- isosent="20090520152256" -->
<!-- name="Lippert, Ross" -->
<!-- email="Ross.Lippert_at_[hidden]" -->
<!-- subject="Re: [OMPI users] FW: hanging after many comm create/destroy's" -->
<!-- id="96333742376F884F89C59F423E34CEE4069157_at_mailnyc1.nyc.deshaw.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200905201516.n4KFGoRY005787_at_master.deshaw.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] FW: hanging after many comm create/destroy's<br>
<strong>From:</strong> Lippert, Ross (<em>Ross.Lippert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-20 11:22:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9407.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9405.php">Edgar Gabriel: "Re: [OMPI users] FW: hanging after many comm create/destroy's"</a>
<li><strong>Maybe in reply to:</strong> <a href="9404.php">Lippert, Ross: "[OMPI users] FW: hanging after many comm create/destroy's"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK.  I'll check back again when 1.3.3 comes out.  Thanks.
<br>
<p>-r 
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Edgar Gabriel
<br>
Sent: Wednesday, May 20, 2009 11:16 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] FW: hanging after many comm create/destroy's
<br>
<p>I am 99.99% sure that this bug has been fixed in the current trunk and 
<br>
will be available in the upcoming 1.3.3 release...
<br>
<p>Thanks
<br>
Edgar
<br>
<p>Lippert, Ross wrote:
<br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The attached program prints hangs at after printing &quot;Iteration 65524&quot;.
</span><br>
<span class="quotelev1">&gt; It does not appear to me that it should.  Removal of the barrier call
</span><br>
or
<br>
<span class="quotelev1">&gt; changing the barrier call to use MPI_COMM_WORLD does get rid of the
</span><br>
<span class="quotelev1">&gt; hang, so I believe this program is a minimal representation of a bug.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have attached the output of ompi_info --all as well.  I do not have
</span><br>
<span class="quotelev1">&gt; access to the config.log.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The command to compile was
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpicc mpibug.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The command to run was 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; orterun --np 8 --mca btl tcp,self -- ./a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -r
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
------------------------------------------------------------------------
<br>
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
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9407.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9405.php">Edgar Gabriel: "Re: [OMPI users] FW: hanging after many comm create/destroy's"</a>
<li><strong>Maybe in reply to:</strong> <a href="9404.php">Lippert, Ross: "[OMPI users] FW: hanging after many comm create/destroy's"</a>
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
