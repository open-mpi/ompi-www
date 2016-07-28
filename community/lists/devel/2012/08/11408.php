<?
$subject_val = "Re: [OMPI devel] 1.6.1rc1 posted";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 17 20:54:51 2012" -->
<!-- isoreceived="20120818005451" -->
<!-- sent="Fri, 17 Aug 2012 20:54:41 -0400" -->
<!-- isosent="20120818005441" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.1rc1 posted" -->
<!-- id="5D6DA3F3-3BDD-4761-906E-BE17043976E5_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="502A6E35.5040501_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.6.1rc1 posted<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-17 20:54:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11409.php">Mike Dubman: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>Previous message:</strong> <a href="11407.php">Jeff Squyres: "Re: [OMPI devel] [Open MPI] #3161: openib udcm finalize causes open async thread to abort"</a>
<li><strong>In reply to:</strong> <a href="11396.php">Paul Kapinos: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11417.php">Yevgeny Kliteynik: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<li><strong>Reply:</strong> <a href="11417.php">Yevgeny Kliteynik: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike / Yevgeny --
<br>
<p>Can you comment on what is going on here?  It would be really good to understand exactly what these 2 MLX4 parameters are (e.g., why you suggested increasing one and not the other), and why there would be differences in registering small numbers of large chunks of contiguous memory vs. large numbers small contiguous chunks of memory...  Also, is there a magic property about being able to register 2x physical memory?  I was under the impression that just being able to register anything &gt;= 1x physical memory was sufficient.
<br>
<p>Paul: I think we're happy enough for 1.6.1.  We can always make this better in 1.6.2, but I think we've fixed the major problems enough for a release.
<br>
<p><p>On Aug 14, 2012, at 11:26 AM, Paul Kapinos wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 08/07/12 18:51, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; So I'm not 100% clear on what you mean here: when you set the OFED params to
</span><br>
<span class="quotelev2">&gt;&gt; allow registration of more memory than you have physically,
</span><br>
<span class="quotelev2">&gt;&gt; does the problem go away?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are talking about machines with 24GB RAM (S) and 96GB RAM (L).
</span><br>
<span class="quotelev1">&gt; The default values for Mellanox/OFED parameter are 20/3 =&gt; 32GB registerable memory (RM) on both S and L. This is more than memory of S, but less than 2x memory of S, and less than memory of L.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If the OFED parameter are pimped to at least RM=64GB (20/3 =&gt; 21/3, 22/3, 24/3) there are no errors, I've just tested it with 8GB respectively 15.5 GB of data (starting usually 1x ppn).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If the OFED parameter are _not_ changed (=32GB RM) there is _no_ warning on S nodes; on L nodes this warns the user:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: It appears that your OpenFabrics subsystem is configured to only
</span><br>
<span class="quotelev1">&gt; .......
</span><br>
<span class="quotelev1">&gt;  Registerable memory:     32768 MiB
</span><br>
<span class="quotelev1">&gt;  Total memory:            98293 MiB
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; .. hardly surprising - the warning came if and only if (RM &lt; memory).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If the OFED parameter are _not_ changed (=32GB RM) and I'm trying to send at least 8GB _in one chunk_ then the 'queue pair' error came out (see S_log.txt and my last mail). More exactly at least one process seem to die in MPI_Finalize (all output of the program is correct). The same error came out also on L nodes, surrounded by the above warning (L_log.txt).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From your log messages, the warning messages were from machines with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nearly 100GB RAM but only 32GB register-able.  But only one of those was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the same as one that showed QP creation failures.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So I'm not clear which was which.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regardless: can you pump the MTT params up to allow registering all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of physical memory on those machines, and see if you get any failures?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; as you can see on a node with 24GB memory and 32GB RM there can be a failure without any warning from Open MPI side :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; To be clear: we're trying to determine if we should spend more effort
</span><br>
<span class="quotelev2">&gt;&gt; on making OMPI work properly in low-registered-memory-availabile
</span><br>
<span class="quotelev2">&gt;&gt; scenarios, or whether we should just emphasize
</span><br>
<span class="quotelev2">&gt;&gt; &quot;go reset your MTT parameters to allow registering all of physical memory.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After making the experience with failures when only 1.5x of phys.mem. is allowed for registering I would follow Mellanox in &quot;go reset your MTT to allow _twice_ the phys.memory&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So,
</span><br>
<span class="quotelev1">&gt; - if the OFED parameter are pimped everything is OK
</span><br>
<span class="quotelev1">&gt; - there is a [rare] combination when your great workaround did not catch.
</span><br>
<span class="quotelev1">&gt; - allowing 2x memory for being registered could be a good idea.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does this make sense?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Paul Kapinos
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S. The used example program is of course an synthetical thing but it is strongly sympathized with the Serpent software. (however serpent usually use chunks whereby the actual error arise if all the 8GB are send in one piece).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S.2 When all works, with increasing chunk size to HUGE values, the performance seem to became worse - sending all 15.5 GB in one piece is more than twice slower than sending with 200 mb pieces. See chunked_send.txt
</span><br>
<span class="quotelev1">&gt; (the first parameter is #doubles of data, the 2nd is #doubles in a chunk).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S.3 all experiments above with 1.6.1rc2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S.4. I'm also performing some linpack runs with 6x nodes and my very first impression is that increasing log_num_mtt to huge values is a bad idea (performance loss of some 5%). But let me finish it first...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev1">&gt; &lt;chunked_send.txt&gt;&lt;S_log.txt&gt;&lt;L_log.txt&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11409.php">Mike Dubman: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>Previous message:</strong> <a href="11407.php">Jeff Squyres: "Re: [OMPI devel] [Open MPI] #3161: openib udcm finalize causes open async thread to abort"</a>
<li><strong>In reply to:</strong> <a href="11396.php">Paul Kapinos: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11417.php">Yevgeny Kliteynik: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<li><strong>Reply:</strong> <a href="11417.php">Yevgeny Kliteynik: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
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
