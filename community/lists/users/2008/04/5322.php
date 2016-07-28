<?
$subject_val = "Re: [OMPI users] Introduce myself.";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr  5 23:41:04 2008" -->
<!-- isoreceived="20080406034104" -->
<!-- sent="Sat, 5 Apr 2008 23:39:53 -0400" -->
<!-- isosent="20080406033953" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Introduce myself." -->
<!-- id="77B5D258-6022-4AAC-97B0-996567F05B88_at_umich.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="dd4eed670804051800g637e8fe1t603a3c6d1dfe17cc_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Introduce myself.<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-05 23:39:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5323.php">brian janus: "[OMPI users] Testing"</a>
<li><strong>Previous message:</strong> <a href="5321.php">Davi Vercillo C. Garcia: "[OMPI users] Introduce myself."</a>
<li><strong>In reply to:</strong> <a href="5321.php">Davi Vercillo C. Garcia: "[OMPI users] Introduce myself."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5324.php">Davi Vercillo C. Garcia: "Re: [OMPI users] Introduce myself."</a>
<li><strong>Reply:</strong> <a href="5324.php">Davi Vercillo C. Garcia: "Re: [OMPI users] Introduce myself."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The best online way to learn MPI I have ever found was the NCSA class  
<br>
here:
<br>
<p><a href="http://ci-tutor.ncsa.uiuc.edu/login.php">http://ci-tutor.ncsa.uiuc.edu/login.php</a>
<br>
<p>OpenMPI and MPICH both implement the same standard set of functions  
<br>
put forth at the MPI Forum. Each OpenMPI and MPICH have their own  
<br>
strong points and weaknesses and bugs. But if you write a MPI app it  
<br>
should work the same using ether libraries after a recompile but not  
<br>
editing (one would hope).  You really want to have this portableness  
<br>
when using MPI libraries on the SGI Altix or IBM Blue Gene which are  
<br>
unique to those systems but are not available on a desktop where you  
<br>
develop that code.  MPI should allow you use develop using OpenMPI or  
<br>
MPICH and then run on a Altix with MPT with little change.  Thats the  
<br>
goal at-least.
<br>
<p>&nbsp;&nbsp;MPI-2  was a update that added features to MPI-1.1 such as the IO  
<br>
calls, process spawning, and one sided operation (MPI_Get() MPI_Put()).
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Apr 5, 2008, at 9:00 PM, Davi Vercillo C. Garcia wrote:
<br>
<span class="quotelev1">&gt; HI all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My name is Davi Vercillo and I'm from Brazil. I'm starting right now
</span><br>
<span class="quotelev1">&gt; to study MPI and I'll use the implementation of OpenMPI for this. I
</span><br>
<span class="quotelev1">&gt; want to know if there is a kind of &quot;MPI for Dummies&quot; that I can find
</span><br>
<span class="quotelev1">&gt; in Internet. Another thing that I would like to know is what the
</span><br>
<span class="quotelev1">&gt; diference with others implementations of MPI like MPICH, MPI-2, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: Sorry about my english.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Davi Vercillo Carneiro Garcia
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Universidade Federal do Rio de Janeiro
</span><br>
<span class="quotelev1">&gt; Departamento de Ci&#234;ncia da Computa&#231;&#227;o
</span><br>
<span class="quotelev1">&gt; DCC-IM/UFRJ - <a href="http://www.dcc.ufrj.br">http://www.dcc.ufrj.br</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Good things come to those who... wait.&quot; - Debian Project
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;A computer is like air conditioning: it becomes useless when you open
</span><br>
<span class="quotelev1">&gt; windows.&quot; - Linus Torvalds
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;H&#225; duas coisas infinitas, o universo e a burrice humana. E eu estou
</span><br>
<span class="quotelev1">&gt; em d&#250;vida quanto o primeiro.&quot; - Albert Einstein
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5323.php">brian janus: "[OMPI users] Testing"</a>
<li><strong>Previous message:</strong> <a href="5321.php">Davi Vercillo C. Garcia: "[OMPI users] Introduce myself."</a>
<li><strong>In reply to:</strong> <a href="5321.php">Davi Vercillo C. Garcia: "[OMPI users] Introduce myself."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5324.php">Davi Vercillo C. Garcia: "Re: [OMPI users] Introduce myself."</a>
<li><strong>Reply:</strong> <a href="5324.php">Davi Vercillo C. Garcia: "Re: [OMPI users] Introduce myself."</a>
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
