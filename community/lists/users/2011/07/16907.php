<?
$subject_val = "Re: [OMPI users] OpenMPI vs Intel Efficiency question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 23:31:40 2011" -->
<!-- isoreceived="20110713033140" -->
<!-- sent="Tue, 12 Jul 2011 23:31:11 -0400" -->
<!-- isosent="20110713033111" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI vs Intel Efficiency question" -->
<!-- id="4E1D117F.2010106_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C47F8344CE6D9B459A06E351D9CF25C9022490EC_at_POSTOFFICE.seas.wustl.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI vs Intel Efficiency question<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-12 23:31:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16908.php">Ralph Castain: "Re: [OMPI users] How to use a wrapper for ssh?"</a>
<li><strong>Previous message:</strong> <a href="16906.php">Mohan, Ashwin: "Re: [OMPI users] OpenMPI vs Intel Efficiency question"</a>
<li><strong>In reply to:</strong> <a href="16906.php">Mohan, Ashwin: "Re: [OMPI users] OpenMPI vs Intel Efficiency question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/12/2011 11:06 PM, Mohan, Ashwin wrote:
<br>
<span class="quotelev1">&gt; Tim,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your message. I was however not clear about your suggestions. Would appreciate if you could clarify.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You say,&quot; So, if you want a sane comparison but aren't willing to study the compiler manuals, you might use (if your source code doesn't violate the aliasing rules) mpiicpc -prec-div -prec-sqrt -ansi-alias  and at least (if your linux compiler is g++) mpiCC -O2 possibly with some of the other options I mentioned earlier.&quot;
</span><br>
<span class="quotelev1">&gt; ###From your response above, I understand to use, for Intel, this syntax: &quot;mpiicpc -prec-div -prec-sqrt -ansi-alias&quot; and for OPENMPI use &quot;mpiCC -O2&quot;. I am not certain about the other options you mention.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ###Also, I presently use a hostfile while submitting my mpirun. Each node has four slots and my hostfile was &quot;nodename slots=4&quot;. My compile code is mpiCC -o xxx.xpp&lt;filename&gt;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you have as ancient a g++ as your indication of FC3 implies, it really isn't fair to compare it with a currently supported compiler.
</span><br>
<span class="quotelev1">&gt; ###Do you suggest upgrading the current installation of g++? Would that help?
</span><br>
How much it would help would depend greatly on your source code.  It 
<br>
won't help much anyway if you don't choose appropriate options.  Current 
<br>
g++ is nearly as good at auto-vectorization as icpc, unless you dive 
<br>
into the pragmas and cilk stuff provided with icpc.
<br>
You really need to look at the gcc manual to understand those options; 
<br>
going into it in any more depth here would try the patience of the list.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ###How do I ensure that all 4 slots are active when i submit a mpirun -np 4&lt;filename&gt;  command. When I do &quot;top&quot;, I notice that all 4 slots are active. I noticed this when I did &quot;top&quot; with the Intel machine too, that is, it showed four slots active.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you..ashwin.
</span><br>
I was having trouble inferring what platform you are running on, I 
<br>
guessed a single core HyperThread, which doesn't seem to agree with your 
<br>
&quot;4 slots&quot; terminology.  If you have 2 single core hyperthread CPUs, it 
<br>
would be a very unusual application to find a gain for running 2 MPI 
<br>
processes per core, but if the sight of 4 processes running on your 
<br>
graph was your goal, I won't argue against it.  You must be aware that 
<br>
most clusters running CPUs of the past have HT disabled in BIOS setup.
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16908.php">Ralph Castain: "Re: [OMPI users] How to use a wrapper for ssh?"</a>
<li><strong>Previous message:</strong> <a href="16906.php">Mohan, Ashwin: "Re: [OMPI users] OpenMPI vs Intel Efficiency question"</a>
<li><strong>In reply to:</strong> <a href="16906.php">Mohan, Ashwin: "Re: [OMPI users] OpenMPI vs Intel Efficiency question"</a>
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
