<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar  6 09:46:11 2007" -->
<!-- isoreceived="20070306144611" -->
<!-- sent="Tue, 6 Mar 2007 09:45:26 -0500" -->
<!-- isosent="20070306144526" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Current working directory issue" -->
<!-- id="D9207778-4F15-4D54-BB80-A6FAE3253449_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="2B00361EE3107A4F88383EC1B041DC9A016AD499_at_VFOHMLAO01.Enterprise.afmc.ds.af.mil" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-06 09:45:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2757.php">Jeff Squyres: "Re: [OMPI users] Fortran90 interfaces--problem?"</a>
<li><strong>Previous message:</strong> <a href="2755.php">Christian Simon: "[OMPI users] configure is too smart !"</a>
<li><strong>In reply to:</strong> <a href="2748.php">Grismer, Matthew J Civ AFRL/VAAC: "[OMPI users] Current working directory issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OMPI uses the getcwd() library call to determine the pwd, whereas the  
<br>
shell $PWD variable contains the shell's point of view of what the  
<br>
PWD is (I *suspect* that the pwd(1) shell command also uses getcwd(),  
<br>
but I don't know that for sure).
<br>
<p>&nbsp;From the OSX getcwd(3) man page:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The getcwd() function copies the absolute pathname of the  
<br>
current working
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;directory into the memory referenced by buf and returns a  
<br>
pointer to buf.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The size argument is the size, in bytes, of the array  
<br>
referenced by buf.
<br>
<p>&nbsp;From the Linux getcwd(3) man page:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The  getcwd() function shall place an absolute pathname of  
<br>
the current
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;working directory in the array pointed to by buf, and return  
<br>
buf.  The
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pathname copied to the array shall contain no components that  
<br>
are sym-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bolic links. ...
<br>
<p>So this at least explains why you're seeing that behavior.
<br>
<p>I'm trying to think of a good reason why we're not checking PWD -- I  
<br>
think the reasons are as follows:
<br>
<p>1. LAM/MPI has used getcwd() for about 10 years (I can't speak for  
<br>
the other MPI's, though)
<br>
<p>2. You're the first guy to ask in that time (or the frequency of  
<br>
asking is so low that I've forgotten)
<br>
<p>But these are pretty wimpy reasons.  :-)  I'll have to check with the  
<br>
other developers to see if there are any &quot;gotchas&quot; to using PWD if  
<br>
it's defined and contains a valid alias for the current directory.
<br>
<p><p><p>On Mar 2, 2007, at 1:12 PM, Grismer, Matthew J Civ AFRL/VAAC wrote:
<br>
<p><span class="quotelev1">&gt; I&#146;m using OpenMPI on an Xserve cluster running OS X Server 10.4.8.  
</span><br>
<span class="quotelev1">&gt; The user directories exist on an XserveRAID connected to the master  
</span><br>
<span class="quotelev1">&gt; node via fibre channel.  So, on the master node the full pathname  
</span><br>
<span class="quotelev1">&gt; for the user directories is /Volumes/RAID1/users1.  The compute  
</span><br>
<span class="quotelev1">&gt; nodes of the cluster automount the user directories via NFS, so the  
</span><br>
<span class="quotelev1">&gt; full path to the user directories appears on the nodes as /xhome/ 
</span><br>
<span class="quotelev1">&gt; users1.  I created a hostfile list of all the compute nodes on the  
</span><br>
<span class="quotelev1">&gt; cluster, not including the master node.  When I attempt to run a  
</span><br>
<span class="quotelev1">&gt; program in my home directory matt from the master node with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun &#150;hostfile nodes &#150;np 4 program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it fails because it cannot find program.  If I add the &#150;wdir option  
</span><br>
<span class="quotelev1">&gt; and specify the directory as /xhome/users1/matt, everything is fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is this, how does OpenMPI determine your working  
</span><br>
<span class="quotelev1">&gt; directory, and is there a way to fix this without the &#150;wdir  
</span><br>
<span class="quotelev1">&gt; option?  For example, if you look at the PWD environment variable,  
</span><br>
<span class="quotelev1">&gt; it is always /xhome/users1/matt, even on the master.  If you use  
</span><br>
<span class="quotelev1">&gt; the pwd command, however, you get different the two different  
</span><br>
<span class="quotelev1">&gt; results on the master and the nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _____________________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matthew Grismer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2757.php">Jeff Squyres: "Re: [OMPI users] Fortran90 interfaces--problem?"</a>
<li><strong>Previous message:</strong> <a href="2755.php">Christian Simon: "[OMPI users] configure is too smart !"</a>
<li><strong>In reply to:</strong> <a href="2748.php">Grismer, Matthew J Civ AFRL/VAAC: "[OMPI users] Current working directory issue"</a>
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
