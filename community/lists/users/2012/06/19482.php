<?
$subject_val = "Re: [OMPI users] Question on ./configure error on Tru64unix (OSF1) v5.1B-6 for openmpi-1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  8 07:07:14 2012" -->
<!-- isoreceived="20120608110714" -->
<!-- sent="Fri, 8 Jun 2012 04:07:10 -0700" -->
<!-- isosent="20120608110710" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on ./configure error on Tru64unix (OSF1) v5.1B-6 for openmpi-1.6" -->
<!-- id="647F0F8C-2AA9-4315-8A2E-EBA0F63F212A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="01OGEKUZ390O8WW46J_at_cluster.cwu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question on ./configure error on Tru64unix (OSF1) v5.1B-6 for openmpi-1.6<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-08 07:07:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19483.php">Siegmar Gross: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<li><strong>Previous message:</strong> <a href="19481.php">Jeff Squyres: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<li><strong>In reply to:</strong> <a href="19480.php">Bill.Glessner_at_[hidden]: "[OMPI users] Question on ./configure error on Tru64unix (OSF1) v5.1B-6 for openmpi-1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19486.php">Rayson Ho: "Re: [OMPI users] Question on ./configure error on Tru64unix (OSF1) v5.1B-6 for openmpi-1.6"</a>
<li><strong>Reply:</strong> <a href="19486.php">Rayson Ho: "Re: [OMPI users] Question on ./configure error on Tru64unix (OSF1) v5.1B-6 for openmpi-1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To be honest, I don't think we've ever tested on Tru64, so I'm not surprised that it doesn't work.  Indeed, I think that it is unlikely that we will ever support Tru64.  :-(
<br>
<p>Sorry!
<br>
<p><p>On Jun 7, 2012, at 12:43 PM, &lt;Bill.Glessner_at_[hidden]&gt; &lt;Bill.Glessner_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am having trouble with the *** Assembler section of the GNU autoconf
</span><br>
<span class="quotelev1">&gt; step in trying to build OpenMPI version 1.6 on an HP AlphaServer GS160
</span><br>
<span class="quotelev1">&gt; running Tru64unix version 5.1B-6:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # uname -a
</span><br>
<span class="quotelev1">&gt; OSF1 zozma.cts.cwu.edu V5.1 2650 alpha
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The output is of the ./configure run
</span><br>
<span class="quotelev1">&gt; zozma(bash)% ./configure --prefix=/usr/local/OpenMPI \
</span><br>
<span class="quotelev1">&gt; --enable-shared --enable-static :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Assembler
</span><br>
<span class="quotelev1">&gt; checking dependency style of gcc... gcc3
</span><br>
<span class="quotelev1">&gt; checking for BSD- or MS-compatible name lister (nm)... /usr/local/bin/nm -B
</span><br>
<span class="quotelev1">&gt; checking the name lister (/usr/local/bin/nm -B) interface... BSD nm
</span><br>
<span class="quotelev1">&gt; checking for fgrep... /usr/local/bin/grep -F
</span><br>
<span class="quotelev1">&gt; checking if need to remove -g from CCASFLAGS... no
</span><br>
<span class="quotelev1">&gt; checking whether to enable smp locks... yes
</span><br>
<span class="quotelev1">&gt; checking if .proc/endp is needed... no
</span><br>
<span class="quotelev1">&gt; checking directive for setting text section... .text
</span><br>
<span class="quotelev1">&gt; checking directive for exporting symbols... .globl
</span><br>
<span class="quotelev1">&gt; checking for objdump... objdump
</span><br>
<span class="quotelev1">&gt; checking if .note.GNU-stack is needed... no
</span><br>
<span class="quotelev1">&gt; checking suffix for labels... :
</span><br>
<span class="quotelev1">&gt; checking prefix for global symbol labels... none
</span><br>
<span class="quotelev1">&gt; configure: error: Could not determine global symbol label prefix
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The ./config.log is appended.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anyone provide some information or suggestions on how to resolve this
</span><br>
<span class="quotelev1">&gt; issue?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your assistance,
</span><br>
<span class="quotelev1">&gt; Bill Glessner   - System programmer , Cenral Washington University
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ******
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
<li><strong>Next message:</strong> <a href="19483.php">Siegmar Gross: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<li><strong>Previous message:</strong> <a href="19481.php">Jeff Squyres: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<li><strong>In reply to:</strong> <a href="19480.php">Bill.Glessner_at_[hidden]: "[OMPI users] Question on ./configure error on Tru64unix (OSF1) v5.1B-6 for openmpi-1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19486.php">Rayson Ho: "Re: [OMPI users] Question on ./configure error on Tru64unix (OSF1) v5.1B-6 for openmpi-1.6"</a>
<li><strong>Reply:</strong> <a href="19486.php">Rayson Ho: "Re: [OMPI users] Question on ./configure error on Tru64unix (OSF1) v5.1B-6 for openmpi-1.6"</a>
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
