<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 22 05:55:07 2007" -->
<!-- isoreceived="20070622095507" -->
<!-- sent="Fri, 22 Jun 2007 11:55:22 +0200" -->
<!-- isosent="20070622095522" -->
<!-- name="sadfub_at_[hidden]" -->
<!-- email="sadfub_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] (loose) SGE Integration fails, why?" -->
<!-- id="467B9C8A.7040408_at_gmx.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200706221020.36534.markus.daene_at_physik.uni-halle.de" -->
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
<strong>From:</strong> <a href="mailto:sadfub_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20(loose)%20SGE%20Integration%20fails,%20why?"><em>sadfub_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-06-22 05:55:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1745.php">Pablo Cascón Katchadourian: "Re: [OMPI devel] create new btl"</a>
<li><strong>Previous message:</strong> <a href="1743.php">Markus Daene: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>In reply to:</strong> <a href="1743.php">Markus Daene: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1747.php">Markus Daene: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1747.php">Markus Daene: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Markus Daene schrieb:
<br>
<span class="quotelev1">&gt; Hi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think it is not necessary to specify the hosts via the hostfile using SGE 
</span><br>
<span class="quotelev1">&gt; and OpenMPI, even the $NSLOTS is not necessary , just run 
</span><br>
<span class="quotelev1">&gt; mpirun executable this works very well.
</span><br>
<p>This produces the same error, but thanks for your suggestion. (For the
<br>
sake of interest: how controls then ompi how many slots it may use?)
<br>
<p><p><span class="quotelev1">&gt; to your memory problem:
</span><br>
<span class="quotelev1">&gt; I had similar problems when I specified the h_vmem option to use in SGE. 
</span><br>
<span class="quotelev1">&gt; Without SGE everything works, but starting with SGE gives such memory errors.
</span><br>
<span class="quotelev1">&gt; You can easily check this with 'qconf -sc'. If you have used this option, try 
</span><br>
<span class="quotelev1">&gt; without it. The problem in my case was that OpenMPI allocates sometimes a lot 
</span><br>
<span class="quotelev1">&gt; of memory and the job gets immediately killed by SGE, and one gets such error 
</span><br>
<span class="quotelev1">&gt; messages, see my posting some days ago. I am not sure if this helps in your 
</span><br>
<span class="quotelev1">&gt; case but it could be an explanation.
</span><br>
<p>Hmm it seems that I'm not using such an option (for my queue the h_vmem
<br>
and s_vmem values are set to infinity). Here the output for the qconf
<br>
-sc command. (Sorry for posting SGE related stuff on this mailing list):
<br>
[~]# qconf -sc
<br>
#name               shortcut   type        relop requestable consumable
<br>
default  urgency
<br>
#----------------------------------------------------------------------------------------
<br>
arch                a          RESTRING    ==    YES         NO
<br>
NONE     0
<br>
calendar            c          RESTRING    ==    YES         NO
<br>
NONE     0
<br>
cpu                 cpu        DOUBLE      &gt;=    YES         NO
<br>
0        0
<br>
h_core              h_core     MEMORY      &lt;=    YES         NO
<br>
0        0
<br>
h_cpu               h_cpu      TIME        &lt;=    YES         NO
<br>
0:0:0    0
<br>
h_data              h_data     MEMORY      &lt;=    YES         NO
<br>
0        0
<br>
h_fsize             h_fsize    MEMORY      &lt;=    YES         NO
<br>
0        0
<br>
h_rss               h_rss      MEMORY      &lt;=    YES         NO
<br>
0        0
<br>
h_rt                h_rt       TIME        &lt;=    YES         NO
<br>
0:0:0    0
<br>
h_stack             h_stack    MEMORY      &lt;=    YES         NO
<br>
0        0
<br>
h_vmem              h_vmem     MEMORY      &lt;=    YES         NO
<br>
0        0
<br>
hostname            h          HOST        ==    YES         NO
<br>
NONE     0
<br>
load_avg            la         DOUBLE      &gt;=    NO          NO
<br>
0        0
<br>
load_long           ll         DOUBLE      &gt;=    NO          NO
<br>
0        0
<br>
load_medium         lm         DOUBLE      &gt;=    NO          NO
<br>
0        0
<br>
load_short          ls         DOUBLE      &gt;=    NO          NO
<br>
0        0
<br>
mem_free            mf         MEMORY      &lt;=    YES         NO
<br>
0        0
<br>
mem_total           mt         MEMORY      &lt;=    YES         NO
<br>
0        0
<br>
mem_used            mu         MEMORY      &gt;=    YES         NO
<br>
0        0
<br>
min_cpu_interval    mci        TIME        &lt;=    NO          NO
<br>
0:0:0    0
<br>
np_load_avg         nla        DOUBLE      &gt;=    NO          NO
<br>
0        0
<br>
np_load_long        nll        DOUBLE      &gt;=    NO          NO
<br>
0        0
<br>
np_load_medium      nlm        DOUBLE      &gt;=    NO          NO
<br>
0        0
<br>
np_load_short       nls        DOUBLE      &gt;=    NO          NO
<br>
0        0
<br>
num_proc            p          INT         ==    YES         NO
<br>
0        0
<br>
qname               q          RESTRING    ==    YES         NO
<br>
NONE     0
<br>
rerun               re         BOOL        ==    NO          NO
<br>
0        0
<br>
s_core              s_core     MEMORY      &lt;=    YES         NO
<br>
0        0
<br>
s_cpu               s_cpu      TIME        &lt;=    YES         NO
<br>
0:0:0    0
<br>
s_data              s_data     MEMORY      &lt;=    YES         NO
<br>
0        0
<br>
s_fsize             s_fsize    MEMORY      &lt;=    YES         NO
<br>
0        0
<br>
s_rss               s_rss      MEMORY      &lt;=    YES         NO
<br>
0        0
<br>
s_rt                s_rt       TIME        &lt;=    YES         NO
<br>
0:0:0    0
<br>
s_stack             s_stack    MEMORY      &lt;=    YES         NO
<br>
0        0
<br>
s_vmem              s_vmem     MEMORY      &lt;=    YES         NO
<br>
0        0
<br>
seq_no              seq        INT         ==    NO          NO
<br>
0        0
<br>
slots               s          INT         &lt;=    YES         YES
<br>
1        1000
<br>
swap_free           sf         MEMORY      &lt;=    YES         NO
<br>
0        0
<br>
swap_rate           sr         MEMORY      &gt;=    YES         NO
<br>
0        0
<br>
swap_rsvd           srsv       MEMORY      &gt;=    YES         NO
<br>
0        0
<br>
swap_total          st         MEMORY      &lt;=    YES         NO
<br>
0        0
<br>
swap_used           su         MEMORY      &gt;=    YES         NO
<br>
0        0
<br>
tmpdir              tmp        RESTRING    ==    NO          NO
<br>
NONE     0
<br>
virtual_free        vf         MEMORY      &lt;=    YES         NO
<br>
0        0
<br>
virtual_total       vt         MEMORY      &lt;=    YES         NO
<br>
0        0
<br>
virtual_used        vu         MEMORY      &gt;=    YES         NO
<br>
0        0
<br>
# &gt;#&lt; starts a comment but comments are not saved across edits --------
<br>
<p>thanks for your help.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1745.php">Pablo Cascón Katchadourian: "Re: [OMPI devel] create new btl"</a>
<li><strong>Previous message:</strong> <a href="1743.php">Markus Daene: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>In reply to:</strong> <a href="1743.php">Markus Daene: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1747.php">Markus Daene: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1747.php">Markus Daene: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
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
