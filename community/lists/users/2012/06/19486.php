<?
$subject_val = "Re: [OMPI users] Question on ./configure error on Tru64unix (OSF1) v5.1B-6 for openmpi-1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  8 11:16:04 2012" -->
<!-- isoreceived="20120608151604" -->
<!-- sent="Fri, 8 Jun 2012 11:15:59 -0400" -->
<!-- isosent="20120608151559" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on ./configure error on Tru64unix (OSF1) v5.1B-6 for openmpi-1.6" -->
<!-- id="CAHwLALPAzHe7C29q99dUZiqDveu_RbAqoL4K_m5EQevS0DnxWg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="647F0F8C-2AA9-4315-8A2E-EBA0F63F212A_at_cisco.com" -->
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
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-08 11:15:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19487.php">BOUVIER Benjamin: "[OMPI users] RE :  Bug when mixing sent types in version 1.6"</a>
<li><strong>Previous message:</strong> <a href="19485.php">Jeff Squyres: "Re: [OMPI users] Bug when mixing sent types in version 1.6"</a>
<li><strong>In reply to:</strong> <a href="19482.php">Jeff Squyres: "Re: [OMPI users] Question on ./configure error on Tru64unix (OSF1) v5.1B-6 for openmpi-1.6"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Bill,
<br>
<p>If you *really* have time, then you can go deep into the log, and find
<br>
out why configure failed. It looks like configure failed when it tried
<br>
to compile this code:
<br>
<p>&nbsp;.text
<br>
&nbsp;# .gsym_test_func
<br>
&nbsp;.globl .gsym_test_func
<br>
&nbsp;.gsym_test_func:
<br>
&nbsp;# .gsym_test_func
<br>
<p>&nbsp;configure:26752: result: none
<br>
&nbsp;configure:26756: error: Could not determine global symbol label prefix
<br>
<p>May be it's a gcc thing?? Like your assembler is too old?? I tried it
<br>
in Cygwin, which has gcc 3.4.4, and it seems to work fine (just copy
<br>
the 5 lines of code above into a file and name it with the &quot;.s&quot; ext
<br>
name. Then compile it with gcc and see if you can reproduce it.
<br>
<p>I was involved in a TOP500 project that uses AlphaServer SC ES45 nodes
<br>
(a total of 4,096 cores), and it was the #2 in TOP500 a decade ago! It
<br>
was fun back then... But I agree with Jeff, it is unlikely that Open
<br>
MPI is going to work on Tru64 - all modern processors are much faster
<br>
than Alpha and I believe even the TOP500 Alpha machines are all
<br>
powered down (even the Earth Simulator is not on the TOP500 list
<br>
anymore - that was the #1 back then!!).
<br>
<p>Rayson
<br>
<p><p><p>On Fri, Jun 8, 2012 at 7:07 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; To be honest, I don't think we've ever tested on Tru64, so I'm not surprised that it doesn't work. &#160;Indeed, I think that it is unlikely that we will ever support Tru64. &#160;:-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 7, 2012, at 12:43 PM, &lt;Bill.Glessner_at_[hidden]&gt; &lt;Bill.Glessner_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am having trouble with the *** Assembler section of the GNU autoconf
</span><br>
<span class="quotelev2">&gt;&gt; step in trying to build OpenMPI version 1.6 on an HP AlphaServer GS160
</span><br>
<span class="quotelev2">&gt;&gt; running Tru64unix version 5.1B-6:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # uname -a
</span><br>
<span class="quotelev2">&gt;&gt; OSF1 zozma.cts.cwu.edu V5.1 2650 alpha
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The output is of the ./configure run
</span><br>
<span class="quotelev2">&gt;&gt; zozma(bash)% ./configure --prefix=/usr/local/OpenMPI \
</span><br>
<span class="quotelev2">&gt;&gt; --enable-shared --enable-static :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *** Assembler
</span><br>
<span class="quotelev2">&gt;&gt; checking dependency style of gcc... gcc3
</span><br>
<span class="quotelev2">&gt;&gt; checking for BSD- or MS-compatible name lister (nm)... /usr/local/bin/nm -B
</span><br>
<span class="quotelev2">&gt;&gt; checking the name lister (/usr/local/bin/nm -B) interface... BSD nm
</span><br>
<span class="quotelev2">&gt;&gt; checking for fgrep... /usr/local/bin/grep -F
</span><br>
<span class="quotelev2">&gt;&gt; checking if need to remove -g from CCASFLAGS... no
</span><br>
<span class="quotelev2">&gt;&gt; checking whether to enable smp locks... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking if .proc/endp is needed... no
</span><br>
<span class="quotelev2">&gt;&gt; checking directive for setting text section... .text
</span><br>
<span class="quotelev2">&gt;&gt; checking directive for exporting symbols... .globl
</span><br>
<span class="quotelev2">&gt;&gt; checking for objdump... objdump
</span><br>
<span class="quotelev2">&gt;&gt; checking if .note.GNU-stack is needed... no
</span><br>
<span class="quotelev2">&gt;&gt; checking suffix for labels... :
</span><br>
<span class="quotelev2">&gt;&gt; checking prefix for global symbol labels... none
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: Could not determine global symbol label prefix
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The ./config.log is appended.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anyone provide some information or suggestions on how to resolve this
</span><br>
<span class="quotelev2">&gt;&gt; issue?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p>==================================================
<br>
Open Grid Scheduler - The Official Open Source Grid Engine
<br>
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
<br>
<p><a href="http://blogs.scalablelogic.com/">http://blogs.scalablelogic.com/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19487.php">BOUVIER Benjamin: "[OMPI users] RE :  Bug when mixing sent types in version 1.6"</a>
<li><strong>Previous message:</strong> <a href="19485.php">Jeff Squyres: "Re: [OMPI users] Bug when mixing sent types in version 1.6"</a>
<li><strong>In reply to:</strong> <a href="19482.php">Jeff Squyres: "Re: [OMPI users] Question on ./configure error on Tru64unix (OSF1) v5.1B-6 for openmpi-1.6"</a>
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
