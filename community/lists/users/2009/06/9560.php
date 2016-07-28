<?
$subject_val = "Re: [OMPI users] MPI inside MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  7 17:48:59 2009" -->
<!-- isoreceived="20090607214859" -->
<!-- sent="Sun, 7 Jun 2009 15:48:44 -0600" -->
<!-- isosent="20090607214844" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI inside MPI" -->
<!-- id="53519087-6D8D-4AC7-9D71-02F3BAAB44A4_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b95def290906061047xb324845n6d3f36908a994b07_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI inside MPI<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-07 17:48:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9561.php">Allen Barnett: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<li><strong>Previous message:</strong> <a href="9559.php">Kritiraj Sajadah: "[OMPI users] Compiling and Building OPENMPI for checkpointing using self"</a>
<li><strong>In reply to:</strong> <a href="9558.php">Carlos Henrique da Silva Santos: "[OMPI users] MPI inside MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid that recursive calls to mpirun are not supported. The  
<br>
problem is that mpirun sets environmental params when launching  
<br>
processes - if that launched process in turn calls mpirun, then those  
<br>
params cause mpirun to break.
<br>
<p>We have at times considered addinga --recursive option to mpirun that  
<br>
would try to resolve this problem, but there unfortunately isn't any  
<br>
good way to do it. We can't know what MCA params the user might have  
<br>
set versus what mpirun sets itself. The only way to resolve it would  
<br>
be for us to prefix params set by mpirun so they could be  
<br>
distinguished from those set by users - but that opens another set of  
<br>
problems that are just as nasty as what we were trying to fix.
<br>
<p>So for now, you can't do what you described. Your better option is use  
<br>
MPI_Comm_spawn for subsequent launches, if that can meet your needs.  
<br>
Otherwise, you might try to reorganize your application to avoid  
<br>
recursively calling mpirun. Either of those two approaches has proven  
<br>
to work in the past - hopefully, one will work for you too.
<br>
<p>Ralph
<br>
<p>On Jun 6, 2009, at 11:47 AM, Carlos Henrique da Silva Santos wrote:
<br>
<p><span class="quotelev1">&gt; Dear,
</span><br>
<span class="quotelev1">&gt;   I developed one application using openmpi in c++. This application  
</span><br>
<span class="quotelev1">&gt; should
</span><br>
<span class="quotelev1">&gt; start internally (by system call) another application which is also
</span><br>
<span class="quotelev1">&gt; developed in c++ and openmpi. When this external application is  
</span><br>
<span class="quotelev1">&gt; called with
</span><br>
<span class="quotelev1">&gt; C system function the following messages are showed:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:05275] 00B: Connectio to HNP lost
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:05276] 00B: Connectio to HNP lost
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:05277] 00B: Connectio to HNP lost
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please, could someone explain what is happening in this case?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt;   Carlos Santos
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9561.php">Allen Barnett: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<li><strong>Previous message:</strong> <a href="9559.php">Kritiraj Sajadah: "[OMPI users] Compiling and Building OPENMPI for checkpointing using self"</a>
<li><strong>In reply to:</strong> <a href="9558.php">Carlos Henrique da Silva Santos: "[OMPI users] MPI inside MPI"</a>
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
