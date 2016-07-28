<?
$subject_val = "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  6 21:17:57 2009" -->
<!-- isoreceived="20090807011757" -->
<!-- sent="Thu, 6 Aug 2009 21:17:39 -0400" -->
<!-- isosent="20090807011739" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob" -->
<!-- id="83E8A64E-9D58-4A21-8DE4-547009518D7B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A7B2467.6010901_at_gmx.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-06 21:17:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10235.php">vipin kumar: "Re: [OMPI users] Bus Error (7) on PS3 running HPL (OpenMPI 1.2.8)"</a>
<li><strong>Previous message:</strong> <a href="10233.php">Gerry Creager: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<li><strong>In reply to:</strong> <a href="10227.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10169.php">Prasadcse Perera: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 6, 2009, at 2:43 PM, Tomislav Maric wrote:
<br>
<p><span class="quotelev1">&gt; the problem wasn't only in the OMPI libs and bins, it was in other
</span><br>
<span class="quotelev1">&gt; binaries as well: OpenFOAM simulation suite is also installed  
</span><br>
<span class="quotelev1">&gt; locally so
</span><br>
<span class="quotelev1">&gt;   a short PATH could't be informative enough.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, I know that the environment is exactly the same, because I'm
</span><br>
<span class="quotelev1">&gt; running liveDVDs with a sole purpose of setting up a NOW and running
</span><br>
<span class="quotelev1">&gt; simulations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Therefore, --prefix and /full/path/mpirun gave me the ability to find
</span><br>
<span class="quotelev1">&gt; orted and similar stuff needed for OMPI, but failed to give me the
</span><br>
<span class="quotelev1">&gt; linkage :) to OpenFOAM binaries and libs. That's why my solver
</span><br>
<span class="quotelev1">&gt; complained that it coulnd't link the .so libraries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Gotcha -- sorry, I probably glossed over those details in the lengthy  
<br>
thread.
<br>
<p><span class="quotelev1">&gt; I'm not quite sure how secure is my solution, it seems a bit radical,
</span><br>
<span class="quotelev1">&gt; but I have tried everything, even sending vars with -x option but gave
</span><br>
<span class="quotelev1">&gt; up because there's like 50 of them. I would have to cat the -x  
</span><br>
<span class="quotelev1">&gt; arguments
</span><br>
<span class="quotelev1">&gt; from a file or smth. :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Nah, you shouldn't need to have a whole string of -x arguments.
<br>
<p>What I generally do is setup my shell startup files (.tcshrc, in my  
<br>
case) to be &quot;correct&quot; on each node.  I have my $HOME directory NFS- 
<br>
mounted on all my machines, so I generally only have to setup  
<br>
my .tcshrc &quot;once&quot; and then it's available on all machines.  All my  
<br>
machines are generally setup fairly homogeneously, too -- I make an  
<br>
effort to ensure that paths and whatnot are the same across all  
<br>
machines.  In my opinion, running in a homogeneous environment is  
<br>
tremendously easier.
<br>
<p>That being said, it looks like you were trying to do exactly that in  
<br>
some of the mails in the prior thread (i.e., setup your shell startup  
<br>
files).  If you're a bash user, you might want to look at this FAQ  
<br>
entry if you haven't already (I admittedly breezed through some of the  
<br>
thread; apologies if you've already mentioned this):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
<br>
<p>In there, it mentions that the interactive shell startup files for  
<br>
bash are:
<br>
<p>.bash_profile if it exists, or .bash_login if it exists, or .profile  
<br>
if it exists (in that order). Note that some Linux distributions  
<br>
automatically come with .bash_profile scripts for users that  
<br>
automatically execute .bashrc as well. Consult the bash man page for  
<br>
more information.
<br>
<p>And the non-interactive shell startup files for bash are:
<br>
<p>.bashrc if it exists
<br>
<p>I think there was some mails back-n-forth about .bashrc  
<br>
and .bash_profile, but let me throw in my $0.02: you had the right  
<br>
idea with putting echo statements in .bashrc and .bash_profile and  
<br>
seeing what gets executed.  Keep it simple, and do tests with ssh (not  
<br>
running bash manually).  For example, add echo statements like  
<br>
&quot;starting bashrc&quot; and &quot;exiting bashrc&quot; and &quot;starting bash_profile&quot; and  
<br>
&quot;exiting bash_profile&quot;.
<br>
<p>host1$ ssh localhost
<br>
--&gt; what displays in this case?
<br>
<p>host1$ ssh localhost hostname
<br>
--&gt; what displays in this case?
<br>
<p>host1$ ssh otherhost
<br>
--&gt; what displays in this case?
<br>
<p>host1$ ssh otherhost hostname
<br>
--&gt; what displays in this case?
<br>
<p>Also, don't apologize for being a MechE.  You're exactly our target  
<br>
audience; we thank you for taking the time to learn and use our  
<br>
software!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10235.php">vipin kumar: "Re: [OMPI users] Bus Error (7) on PS3 running HPL (OpenMPI 1.2.8)"</a>
<li><strong>Previous message:</strong> <a href="10233.php">Gerry Creager: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<li><strong>In reply to:</strong> <a href="10227.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10169.php">Prasadcse Perera: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
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
