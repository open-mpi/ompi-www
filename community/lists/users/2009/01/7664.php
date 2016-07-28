<?
$subject_val = "Re: [OMPI users] Need help in setting up openmpi on multiple clusters";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  8 02:36:15 2009" -->
<!-- isoreceived="20090108073615" -->
<!-- sent="Thu, 8 Jan 2009 08:36:09 +0100" -->
<!-- isosent="20090108073609" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help in setting up openmpi on multiple clusters" -->
<!-- id="9b0da5ce0901072336g3307ecc2g3871cec4e74396e5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="f4e1c520901072302y5f51ed3eoec4a5ad0bce098ab_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Need help in setting up openmpi on multiple clusters<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-08 02:36:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7665.php">Thomas Ropars: "Re: [OMPI users] Error message when using MPI_Type_struct()"</a>
<li><strong>Previous message:</strong> <a href="7663.php">gaurav gupta: "[OMPI users] Need help in setting up openmpi on multiple clusters"</a>
<li><strong>In reply to:</strong> <a href="7663.php">gaurav gupta: "[OMPI users] Need help in setting up openmpi on multiple clusters"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gupta
<br>
<p>One way to do it is to run your application in a directory to which
<br>
all nodes have access via NFS.
<br>
<p>And if &quot;./&quot; is not in your $PATH you may want to write ./a.out instead
<br>
of just a.out.
<br>
<p><p>Jody
<br>
<p><p>On Thu, Jan 8, 2009 at 8:02 AM, gaurav gupta &lt;1989.gaurav_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am new to mpi programming and openmpi. I have installed openmpi and run
</span><br>
<span class="quotelev1">&gt; several sample programmes on single machine. But while running on several
</span><br>
<span class="quotelev1">&gt; nodes it is showing errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have configured openmpi and automated login to all nodes with user mpi.
</span><br>
<span class="quotelev1">&gt; Now on master i tried to run by &quot;mpiexec -np 4 -host n1,n2,n3,n4 a.out&quot;
</span><br>
<span class="quotelev1">&gt; where n1,n2,n3 and n4 are four nodes on which i have enabled automatic
</span><br>
<span class="quotelev1">&gt; login. Now I am getting error :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Failed to find the following executable:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host:       server1.tm.local
</span><br>
<span class="quotelev1">&gt; Executable: a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cannot continue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now my problem is this should I copy this executable to all nodes ??? If yes
</span><br>
<span class="quotelev1">&gt; then how will it work, because I am not expecting any value from user all
</span><br>
<span class="quotelev1">&gt; parameters are generated in a.out itself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please help me out what is the problem here and what should i do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; GAURAV GUPTA
</span><br>
<span class="quotelev1">&gt; B.Tech III Yr. , Department of Computer Science &amp; Engineering
</span><br>
<span class="quotelev1">&gt; IT BHU , Varanasi
</span><br>
<span class="quotelev1">&gt; Contacts
</span><br>
<span class="quotelev1">&gt; Phone No: +91-99569-49491
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; e-mail :
</span><br>
<span class="quotelev1">&gt; gaurav.gupta_at_[hidden]
</span><br>
<span class="quotelev1">&gt; gaurav.gupta.cse06_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 1989.gaurav_at_[hidden]
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7665.php">Thomas Ropars: "Re: [OMPI users] Error message when using MPI_Type_struct()"</a>
<li><strong>Previous message:</strong> <a href="7663.php">gaurav gupta: "[OMPI users] Need help in setting up openmpi on multiple clusters"</a>
<li><strong>In reply to:</strong> <a href="7663.php">gaurav gupta: "[OMPI users] Need help in setting up openmpi on multiple clusters"</a>
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
