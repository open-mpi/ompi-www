<?
$subject_val = "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 19:35:08 2014" -->
<!-- isoreceived="20140327233508" -->
<!-- sent="Thu, 27 Mar 2014 18:26:33 -0500" -->
<!-- isosent="20140327232633" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-ROMIO-OrangeFS" -->
<!-- id="5334B3A9.3000905_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="87ioqz6z1m.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI-ROMIO-OrangeFS<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-27 19:26:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24012.php">Reuti: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="24010.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>In reply to:</strong> <a href="24004.php">Dave Love: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24016.php">Rob Latham: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Reply:</strong> <a href="24016.php">Rob Latham: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I will resubmit a new patch, Rob sent me a pointer to the correct
<br>
solution. Its on my to do list for tomorrow/this weekend.
<br>
<p>Thanks
<br>
Edgar
<br>
<p>On 3/27/2014 5:45 PM, Dave Love wrote:
<br>
<span class="quotelev1">&gt; Edgar Gabriel &lt;gabriel_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; not sure honestly. Basically, as suggested in this email chain earlier,
</span><br>
<span class="quotelev2">&gt;&gt; I had to disable the PVFS2_IreadContig and PVFS2_IwriteContig routines
</span><br>
<span class="quotelev2">&gt;&gt; in ad_pvfs2.c to make the tests pass. Otherwise the tests worked but
</span><br>
<span class="quotelev2">&gt;&gt; produced wrong data. I did not have however the time to figure what
</span><br>
<span class="quotelev2">&gt;&gt; actually goes wrong underneath the hood.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [I can't get into trac to comment on the issue (hangs on login), so I'm
</span><br>
<span class="quotelev1">&gt; following up here.]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In case it's not clear, the changes for 1.6 and 1.7 are different, and
</span><br>
<span class="quotelev1">&gt; probably shouldn't be.  The patch I took from 1.7 looked similar to
</span><br>
<span class="quotelev1">&gt; what's in mpich, but hard-wired rather than autoconfiscated, whereas the
</span><br>
<span class="quotelev1">&gt; patch for 1.6 on the tracker sets the entries to NULL instead.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Edgar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 3/25/2014 9:21 AM, Rob Latham wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 03/25/2014 07:32 AM, Dave Love wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Edgar Gabriel &lt;gabriel_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am still looking into the PVFS2 with ROMIO problem with the 1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; series, where (as I mentioned yesterday) the problem I am having right
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; now is that the data is wrong. Not sure what causes it, but since I have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; teach this afternoon again, it might be friday until I can digg into
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Was there any progress with this?  Otherwise, what version of PVFS2 is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; known to work with OMPI 1.6?  Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Edgar, should I pick this up for MPICH, or was this fix specific to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==rob
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24011/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24012.php">Reuti: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="24010.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>In reply to:</strong> <a href="24004.php">Dave Love: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24016.php">Rob Latham: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Reply:</strong> <a href="24016.php">Rob Latham: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
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
