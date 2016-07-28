<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 22 07:05:26 2007" -->
<!-- isoreceived="20070622110526" -->
<!-- sent="Fri, 22 Jun 2007 12:44:27 +0200" -->
<!-- isosent="20070622104427" -->
<!-- name="Markus Daene" -->
<!-- email="markus.daene_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] (loose) SGE Integration fails, why?" -->
<!-- id="200706221244.28106.markus.daene_at_physik.uni-halle.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="467B9C8A.7040408_at_gmx.net" -->
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
<strong>From:</strong> Markus Daene (<em>markus.daene_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-22 06:44:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1748.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1746.php">Jeff Squyres: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>In reply to:</strong> <a href="1744.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1748.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1748.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Markus Daene wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think it is not necessary to specify the hosts via the hostfile using
</span><br>
<span class="quotelev2">&gt; &gt; SGE and OpenMPI, even the $NSLOTS is not necessary , just run
</span><br>
<span class="quotelev2">&gt; &gt; mpirun executable this works very well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This produces the same error, but thanks for your suggestion. (For the
</span><br>
<span class="quotelev1">&gt; sake of interest: how controls then ompi how many slots it may use?)
</span><br>
<p>It just knows ist, I think the developers could answer this quastions.
<br>
<p><span class="quotelev2">&gt; &gt; to your memory problem:
</span><br>
<span class="quotelev2">&gt; &gt; I had similar problems when I specified the h_vmem option to use in SGE.
</span><br>
<span class="quotelev2">&gt; &gt; Without SGE everything works, but starting with SGE gives such memory
</span><br>
<span class="quotelev2">&gt; &gt; errors. You can easily check this with 'qconf -sc'. If you have used this
</span><br>
<span class="quotelev2">&gt; &gt; option, try without it. The problem in my case was that OpenMPI allocates
</span><br>
<span class="quotelev2">&gt; &gt; sometimes a lot of memory and the job gets immediately killed by SGE, and
</span><br>
<span class="quotelev2">&gt; &gt; one gets such error messages, see my posting some days ago. I am not sure
</span><br>
<span class="quotelev2">&gt; &gt; if this helps in your case but it could be an explanation.
</span><br>
<p>I am sorry to discuss SGE stuff here as well, but there was this question and 
<br>
one should make clear that this is not just related to OMPI.
<br>
<p>I think your output shows exactely the problem: you have set h_vmem as 
<br>
requestable and the default value to 0, the job has no memory at all. OMPI 
<br>
somehow knows that is has just this memory granted by SGE, so it cannot 
<br>
allocate any memory in this case. Of course you get the errors.
<br>
You should either set h_vmem to not requestable, or set a proper default 
<br>
value. e.g. 2.0G, or specify the memory consumption in your job script like
<br>
#$ -l h_vmem=2000M
<br>
it is not important that your queue has set h_vmem to infinity, this gives you 
<br>
just the maximum which you can request. 
<br>
<p>Markus
<br>
<p><p><span class="quotelev1">&gt; Hmm it seems that I'm not using such an option (for my queue the h_vmem
</span><br>
<span class="quotelev1">&gt; and s_vmem values are set to infinity). Here the output for the qconf
</span><br>
<span class="quotelev1">&gt; -sc command. (Sorry for posting SGE related stuff on this mailing list):
</span><br>
<span class="quotelev1">&gt; [~]# qconf -sc
</span><br>
<span class="quotelev1">&gt; #name               shortcut   type        relop requestable consumable
</span><br>
<span class="quotelev1">&gt; default  urgency
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;-------------- arch                a          RESTRING    ==    YES        
</span><br>
<span class="quotelev1">&gt; NO
</span><br>
<span class="quotelev1">&gt; NONE     0
</span><br>
<span class="quotelev1">&gt; calendar            c          RESTRING    ==    YES         NO
</span><br>
<span class="quotelev1">&gt; NONE     0
</span><br>
<span class="quotelev1">&gt; cpu                 cpu        DOUBLE      &gt;=    YES         NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; h_core              h_core     MEMORY      &lt;=    YES         NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; h_cpu               h_cpu      TIME        &lt;=    YES         NO
</span><br>
<span class="quotelev1">&gt; 0:0:0    0
</span><br>
<span class="quotelev1">&gt; h_data              h_data     MEMORY      &lt;=    YES         NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; h_fsize             h_fsize    MEMORY      &lt;=    YES         NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; h_rss               h_rss      MEMORY      &lt;=    YES         NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; h_rt                h_rt       TIME        &lt;=    YES         NO
</span><br>
<span class="quotelev1">&gt; 0:0:0    0
</span><br>
<span class="quotelev1">&gt; h_stack             h_stack    MEMORY      &lt;=    YES         NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; h_vmem              h_vmem     MEMORY      &lt;=    YES         NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; hostname            h          HOST        ==    YES         NO
</span><br>
<span class="quotelev1">&gt; NONE     0
</span><br>
<span class="quotelev1">&gt; load_avg            la         DOUBLE      &gt;=    NO          NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; load_long           ll         DOUBLE      &gt;=    NO          NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; load_medium         lm         DOUBLE      &gt;=    NO          NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; load_short          ls         DOUBLE      &gt;=    NO          NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; mem_free            mf         MEMORY      &lt;=    YES         NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; mem_total           mt         MEMORY      &lt;=    YES         NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; mem_used            mu         MEMORY      &gt;=    YES         NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; min_cpu_interval    mci        TIME        &lt;=    NO          NO
</span><br>
<span class="quotelev1">&gt; 0:0:0    0
</span><br>
<span class="quotelev1">&gt; np_load_avg         nla        DOUBLE      &gt;=    NO          NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; np_load_long        nll        DOUBLE      &gt;=    NO          NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; np_load_medium      nlm        DOUBLE      &gt;=    NO          NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; np_load_short       nls        DOUBLE      &gt;=    NO          NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; num_proc            p          INT         ==    YES         NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; qname               q          RESTRING    ==    YES         NO
</span><br>
<span class="quotelev1">&gt; NONE     0
</span><br>
<span class="quotelev1">&gt; rerun               re         BOOL        ==    NO          NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; s_core              s_core     MEMORY      &lt;=    YES         NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; s_cpu               s_cpu      TIME        &lt;=    YES         NO
</span><br>
<span class="quotelev1">&gt; 0:0:0    0
</span><br>
<span class="quotelev1">&gt; s_data              s_data     MEMORY      &lt;=    YES         NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; s_fsize             s_fsize    MEMORY      &lt;=    YES         NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; s_rss               s_rss      MEMORY      &lt;=    YES         NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; s_rt                s_rt       TIME        &lt;=    YES         NO
</span><br>
<span class="quotelev1">&gt; 0:0:0    0
</span><br>
<span class="quotelev1">&gt; s_stack             s_stack    MEMORY      &lt;=    YES         NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; s_vmem              s_vmem     MEMORY      &lt;=    YES         NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; seq_no              seq        INT         ==    NO          NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; slots               s          INT         &lt;=    YES         YES
</span><br>
<span class="quotelev1">&gt; 1        1000
</span><br>
<span class="quotelev1">&gt; swap_free           sf         MEMORY      &lt;=    YES         NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; swap_rate           sr         MEMORY      &gt;=    YES         NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; swap_rsvd           srsv       MEMORY      &gt;=    YES         NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; swap_total          st         MEMORY      &lt;=    YES         NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; swap_used           su         MEMORY      &gt;=    YES         NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; tmpdir              tmp        RESTRING    ==    NO          NO
</span><br>
<span class="quotelev1">&gt; NONE     0
</span><br>
<span class="quotelev1">&gt; virtual_free        vf         MEMORY      &lt;=    YES         NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; virtual_total       vt         MEMORY      &lt;=    YES         NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; virtual_used        vu         MEMORY      &gt;=    YES         NO
</span><br>
<span class="quotelev1">&gt; 0        0
</span><br>
<span class="quotelev1">&gt; # &gt;#&lt; starts a comment but comments are not saved across edits --------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks for your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1748.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1746.php">Jeff Squyres: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>In reply to:</strong> <a href="1744.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1748.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1748.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
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
