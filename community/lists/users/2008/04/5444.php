<?
$subject_val = "Re: [OMPI users] Problems with program-execution with	OpenMPI:	Orted: command not found";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 22 09:02:59 2008" -->
<!-- isoreceived="20080422130259" -->
<!-- sent="Tue, 22 Apr 2008 09:02:50 -0400" -->
<!-- isosent="20080422130250" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with program-execution with	OpenMPI:	Orted: command not found" -->
<!-- id="B16B5343-28CB-4436-8971-CF9E16A78317_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080422124858.142460_at_gmx.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with program-execution with	OpenMPI:	Orted: command not found<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-22 09:02:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5445.php">Tomas Ukkonen: "[OMPI users] Message compression in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5443.php">Jeff Squyres: "Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
<li><strong>In reply to:</strong> <a href="5441.php">Hans Wurst: "Re: [OMPI users] Problems with program-execution with	OpenMPI:	Orted: command not found"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 22, 2008, at 8:48 AM, Hans Wurst wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Make sure you're using the &quot;right&quot; mpirun.  If you have both MPICH  
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI installed, you need to install them into the different
</span><br>
<span class="quotelev2">&gt;&gt; directories.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am sure. I have separate VMware-instances installed in order to  
</span><br>
<span class="quotelev1">&gt; avoid any interdependencies. Although I'd like to have MPICH and  
</span><br>
<span class="quotelev1">&gt; OpenMPI installed on the same machines in the future to keep my  
</span><br>
<span class="quotelev1">&gt; efforts for maintenance small, I invested these endeavors for the  
</span><br>
<span class="quotelev1">&gt; first.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would  be grateful, if you could advice me about a clean setup for  
</span><br>
<span class="quotelev1">&gt; a machine with both MPICH and OpenMPI installed, but I don't want to  
</span><br>
<span class="quotelev1">&gt; mix up things here.
</span><br>
<p>All you need to do is install them both into separate prefixes (e.g., / 
<br>
opt/openmpi and /opt/mpich).  Then when you're using them, ensure that  
<br>
your PATH / LD_LIBRARY_PATH is set consistently across all nodes, or  
<br>
if using Open MPI, use the options listed in the &quot;What if I can't  
<br>
modify my PATH and/or LD_LIBRARY_PATH?&quot; FAQ entry (I'm particularly  
<br>
fond of the --enable-mpirun-prefix-by-default option).
<br>
<p><span class="quotelev2">&gt;&gt; As for not finding the &quot;orted&quot; on the remote nodes, it simply means
</span><br>
<span class="quotelev2">&gt;&gt; that your PATH / LD_LIBRARY_PATH is not set properly on the remote
</span><br>
<span class="quotelev2">&gt;&gt; nodes.  See:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#run-prereqs">http://www.open-mpi.org/faq/?category=running#run-prereqs</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpirun-prefix">http://www.open-mpi.org/faq/?category=running#mpirun-prefix</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My PATH should be set properly. As I wrote before:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;
</span><br>
<span class="quotelev1">&gt; The &quot;orted&quot;-executable resides as well as the &quot;mpirun&quot;- and  
</span><br>
<span class="quotelev1">&gt; &quot;mpiexec&quot;-executables in the directory /home/stephan/openmpi- 
</span><br>
<span class="quotelev1">&gt; install. &quot;orted&quot; is also found by &quot;which orted&quot;.
</span><br>
<span class="quotelev1">&gt; &quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've exported it with the following command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  export PATH=/home/stephan/openmpi-install/bin:$PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do I get you right:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You advice me, to export the /home/stephan/openmpi-install/lib- 
</span><br>
<span class="quotelev1">&gt; directory to LD_LIBRARY_PATH too? I can try this at home this evening.
</span><br>
<p>Yes.  But the point is that if you're not using something like -- 
<br>
enable-mpirun-prefix-by-default, then you need to set this PATH and  
<br>
LD_LIBRARY_PATH on *all* nodes
<br>
(e.g., in your shell setup files).  It is not sufficient to export  
<br>
PATH on just the node where you invoke mpirun.  See the FAQ entries  
<br>
for more details.
<br>
<p><span class="quotelev2">&gt;&gt; - &quot;--hostfile FILENAME&quot;, where FILENAME is a list of a hostfile as
</span><br>
<span class="quotelev2">&gt;&gt; described in the FAQ.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     mpirun --hostfile my_hostfile.txt ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, my hostfile is named mpd.hosts and has the content
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NodeA
</span><br>
<span class="quotelev1">&gt; NodeB
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; , but I guess, that should fit the requirements, right?
</span><br>
<p>Yes, that should be fine.  Hosts listed without slot counts are  
<br>
assumed to have a slot count of 1.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5445.php">Tomas Ukkonen: "[OMPI users] Message compression in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5443.php">Jeff Squyres: "Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
<li><strong>In reply to:</strong> <a href="5441.php">Hans Wurst: "Re: [OMPI users] Problems with program-execution with	OpenMPI:	Orted: command not found"</a>
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
