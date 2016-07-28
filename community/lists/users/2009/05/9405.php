<?
$subject_val = "Re: [OMPI users] FW: hanging after many comm create/destroy's";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 11:16:28 2009" -->
<!-- isoreceived="20090520151628" -->
<!-- sent="Wed, 20 May 2009 10:16:22 -0500" -->
<!-- isosent="20090520151622" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] FW: hanging after many comm create/destroy's" -->
<!-- id="4A141EC6.4030100_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="96333742376F884F89C59F423E34CEE4069154_at_mailnyc1.nyc.deshaw.com" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-20 11:16:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9406.php">Lippert, Ross: "Re: [OMPI users] FW: hanging after many comm create/destroy's"</a>
<li><strong>Previous message:</strong> <a href="9404.php">Lippert, Ross: "[OMPI users] FW: hanging after many comm create/destroy's"</a>
<li><strong>In reply to:</strong> <a href="9404.php">Lippert, Ross: "[OMPI users] FW: hanging after many comm create/destroy's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9406.php">Lippert, Ross: "Re: [OMPI users] FW: hanging after many comm create/destroy's"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am 99.99% sure that this bug has been fixed in the current trunk and 
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
<span class="quotelev1">&gt; It does not appear to me that it should.  Removal of the barrier call or
</span><br>
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
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9406.php">Lippert, Ross: "Re: [OMPI users] FW: hanging after many comm create/destroy's"</a>
<li><strong>Previous message:</strong> <a href="9404.php">Lippert, Ross: "[OMPI users] FW: hanging after many comm create/destroy's"</a>
<li><strong>In reply to:</strong> <a href="9404.php">Lippert, Ross: "[OMPI users] FW: hanging after many comm create/destroy's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9406.php">Lippert, Ross: "Re: [OMPI users] FW: hanging after many comm create/destroy's"</a>
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
