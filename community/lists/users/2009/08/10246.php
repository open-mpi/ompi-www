<?
$subject_val = "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  7 09:45:54 2009" -->
<!-- isoreceived="20090807134554" -->
<!-- sent="Fri, 07 Aug 2009 09:44:34 -0400" -->
<!-- isosent="20090807134434" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB" -->
<!-- id="4A7C2FC2.7080402_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-07 09:44:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10247.php">Craig Tierney: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<li><strong>Previous message:</strong> <a href="10245.php">Jeff Squyres: "Re: [OMPI users] init failing"</a>
<li><strong>Maybe in reply to:</strong> <a href="10233.php">Gerry Creager: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10248.php">Craig Tierney: "[OMPI users] Failure trying to use tuned collectives"</a>
<li><strong>Reply:</strong> <a href="10248.php">Craig Tierney: "[OMPI users] Failure trying to use tuned collectives"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Date: Fri, 07 Aug 2009 07:12:45 -0600
</span><br>
<span class="quotelev1">&gt; From: Craig Tierney &lt;craig.tierney_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Performance question about OpenMPI and
</span><br>
<span class="quotelev1">&gt; 	MVAPICH2 on	IB
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;4A7C284D.3040603_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Craig,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Did your affinity script bind the processes per socket or linearly to 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; cores.  If the former you'll want to look at using rankfiles and place 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the ranks based on sockets.  TWe have found this especially useful if 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; you are not running fully subscribed on your machines.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The script binds them to sockets and also binds memory per node.
</span><br>
<span class="quotelev1">&gt; It is smart enough that if the machine_file does not use all
</span><br>
<span class="quotelev1">&gt; the cores (because the user reordered them) then the script will
</span><br>
<span class="quotelev1">&gt; lay out the tasks evenly between the two sockets.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Ok, so you'll probably want to look at using rankfile (described in the 
<br>
mpirun manpage) because mpi_paffinity_alone just does a linear binding 
<br>
(rank 0 to cpu0, rank 1 to cpu 1...).
<br>
<p><span class="quotelev3">&gt;&gt; &gt; Also, if you think the main issue is collectives performance you may 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; want to try using the hierarchical and SM collectives.  However, be 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; forewarned we are right now trying to pound out some errors with these 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; modules.  To enable them you add the following parameters &quot;--mca 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; coll_hierarch_priority 100 --mca coll_sm_priority 100&quot;.  We would be 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; very interested in any results you get (failures, improvements, 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; non-improvements).
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know what it is slow.  OpenMPI is so flexible in how the
</span><br>
<span class="quotelev1">&gt; stack can be tuned.  But I also have 100s of users runing dozens
</span><br>
<span class="quotelev1">&gt; of major codes, and what I need is a set of options that 'just work'
</span><br>
<span class="quotelev1">&gt; in most cases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will try the above options and get back to you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Ok, thanks.
<br>
<p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10247.php">Craig Tierney: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<li><strong>Previous message:</strong> <a href="10245.php">Jeff Squyres: "Re: [OMPI users] init failing"</a>
<li><strong>Maybe in reply to:</strong> <a href="10233.php">Gerry Creager: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10248.php">Craig Tierney: "[OMPI users] Failure trying to use tuned collectives"</a>
<li><strong>Reply:</strong> <a href="10248.php">Craig Tierney: "[OMPI users] Failure trying to use tuned collectives"</a>
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
