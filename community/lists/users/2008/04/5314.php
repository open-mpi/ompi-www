<?
$subject_val = "Re: [OMPI users] setup of a basic system on RHEL or Fedora";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  4 07:34:16 2008" -->
<!-- isoreceived="20080404113416" -->
<!-- sent="Fri, 4 Apr 2008 07:34:02 -0400" -->
<!-- isosent="20080404113402" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] setup of a basic system on RHEL or Fedora" -->
<!-- id="2912918A-7326-4232-897F-5350FB19770F_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Prayer.1.0.16.0804032241380.8648_at_wm2.tc.umn.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] setup of a basic system on RHEL or Fedora<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-04 07:34:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5315.php">Jeff Squyres: "Re: [OMPI users] iof, readline, lost stdin buffering"</a>
<li><strong>Previous message:</strong> <a href="5313.php">Lars Andersson: "[OMPI users] Oversubscription performance problem"</a>
<li><strong>In reply to:</strong> <a href="5312.php">trnja001_at_[hidden]: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5318.php">Elvedin Trnjanin: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
<li><strong>Reply:</strong> <a href="5318.php">Elvedin Trnjanin: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like an interactive vs. non-interactive PATH problem. Please do  
<br>
a &quot;ssh node02 printenv&quot; and see if you get what you expect in the PATH.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Apr 3, 2008, at 11:41 PM, trnja001_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; OpenMPI does not use PATH, at least not by default (or my default).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Node 1:
</span><br>
<span class="quotelev1">&gt; PATH=/usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin:/home/elvedin/bin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Node 2:
</span><br>
<span class="quotelev1">&gt; PATH=/home/elvedin/mpi/ompi/bin:/usr/kerberos/bin:/usr/lib/ccache:/ 
</span><br>
<span class="quotelev1">&gt; usr/local/bin:/bin:/usr/bin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Binary &quot;endian&quot; is in /home/elvedin/mpi/ompi/bin of node 2 (as  
</span><br>
<span class="quotelev1">&gt; defined in
</span><br>
<span class="quotelev1">&gt; PATH) and in /home/elvedin/ of node 1. Running from node 1 with  
</span><br>
<span class="quotelev1">&gt; &quot;mpirun -np
</span><br>
<span class="quotelev1">&gt; 2 -machinefile (has node1,node2 in it) endian&quot; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Failed to find the following executable:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host:       node2
</span><br>
<span class="quotelev1">&gt; Executable: endian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 3 2008, Terry Frankcombe wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Someone can correct me if I'm wrong, but I do believe that the
</span><br>
<span class="quotelev2">&gt;&gt; executables don't need to be in the same place on every node, but  
</span><br>
<span class="quotelev2">&gt;&gt; they
</span><br>
<span class="quotelev2">&gt;&gt; do need to be on every node somewhere in that node's PATH.   
</span><br>
<span class="quotelev2">&gt;&gt; Certainly,
</span><br>
<span class="quotelev2">&gt;&gt; consistent NFS mounted filespaces is one of the easiest ways to  
</span><br>
<span class="quotelev2">&gt;&gt; achieve
</span><br>
<span class="quotelev2">&gt;&gt; this.
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5314/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5315.php">Jeff Squyres: "Re: [OMPI users] iof, readline, lost stdin buffering"</a>
<li><strong>Previous message:</strong> <a href="5313.php">Lars Andersson: "[OMPI users] Oversubscription performance problem"</a>
<li><strong>In reply to:</strong> <a href="5312.php">trnja001_at_[hidden]: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5318.php">Elvedin Trnjanin: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
<li><strong>Reply:</strong> <a href="5318.php">Elvedin Trnjanin: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
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
