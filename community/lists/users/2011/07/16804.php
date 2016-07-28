<?
$subject_val = "Re: [OMPI users] The hostfile  could not be found";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul  2 16:33:54 2011" -->
<!-- isoreceived="20110702203354" -->
<!-- sent="Sat, 2 Jul 2011 15:33:43 -0500" -->
<!-- isosent="20110702203343" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] The hostfile  could not be found" -->
<!-- id="7A5E5722-1864-47C1-92FE-68FD1B2B96E2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201107011024058125721_at_163.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] The hostfile  could not be found<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-02 16:33:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16805.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open-MPI maffinity policy"</a>
<li><strong>Previous message:</strong> <a href="16803.php">Christian Anonymous: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16798.php">zhuangchao: "[OMPI users] The hostfile  could not be found"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You should probably also use open MPI's native torque support instead of a hostile. 
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Jun 30, 2011, at 9:24 PM, &quot;zhuangchao&quot; &lt;freeoser_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; hello  all ,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      I  submited  the following  Torque/pbs script. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      #PBS -e /tmp/blast_19297.err
</span><br>
<span class="quotelev1">&gt;      #PBS -o /tmp/blast.output
</span><br>
<span class="quotelev1">&gt;      mpiexec  -d -machinefile  /tmp/nodes.19297.txt   -np  3  /data1/bin/mpiblast  -p tblastx -i /data1/cluster/sequences/seq_4.txt -d nt -o /data1/cluster/blast.out/blast.out.19297      -g T -m  0 -F F
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      Then  I  got  the following error  from openmpi.   But  it is ok if I run the above mpiexec command 
</span><br>
<span class="quotelev1">&gt; in the bash shell.  Can you  help me ?  Thank you very much !  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; n-1&lt;18242&gt; ssi:boot:base: looking for boot schema in following directories:
</span><br>
<span class="quotelev1">&gt; n-1&lt;18242&gt; ssi:boot:base:   &lt;current directory&gt;
</span><br>
<span class="quotelev1">&gt; n-1&lt;18242&gt; ssi:boot:base:   $TROLLIUSHOME/etc
</span><br>
<span class="quotelev1">&gt; n-1&lt;18242&gt; ssi:boot:base:   $LAMHOME/etc
</span><br>
<span class="quotelev1">&gt; n-1&lt;18242&gt; ssi:boot:base:   /data1/lam-mpi/etc
</span><br>
<span class="quotelev1">&gt; n-1&lt;18242&gt; ssi:boot:base: looking for boot schema file:
</span><br>
<span class="quotelev1">&gt; n-1&lt;18242&gt; ssi:boot:base:   /tmp/nodes.19297.txt
</span><br>
<span class="quotelev1">&gt; n-1&lt;18242&gt; ssi:boot:base: found boot schema: Not found!
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The hostfile &quot;/tmp/nodes.19297.txt&quot; could not be found:
</span><br>
<span class="quotelev1">&gt;         Unix errno: 2
</span><br>
<span class="quotelev1">&gt;         No such file or directory
</span><br>
<span class="quotelev1">&gt; Things to check:
</span><br>
<span class="quotelev1">&gt;         - ensure that the file exists
</span><br>
<span class="quotelev1">&gt;           try &quot;ls -l /tmp/nodes.19297.txt&quot;
</span><br>
<span class="quotelev1">&gt;         - ensure that you have read permissions on the file
</span><br>
<span class="quotelev1">&gt;           try &quot;cat /tmp/nodes.19297.txt&quot;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It seems that there is no lamd running on the host node2.
</span><br>
<span class="quotelev1">&gt; This indicates that the LAM/MPI runtime environment is not operating.
</span><br>
<span class="quotelev1">&gt; The LAM/MPI runtime environment is necessary for the &quot;lamhalt&quot; command.
</span><br>
<span class="quotelev1">&gt; Please run the &quot;lamboot&quot; command the start the LAM/MPI runtime
</span><br>
<span class="quotelev1">&gt; environment.  See the LAM/MPI documentation for how to invoke
</span><br>
<span class="quotelev1">&gt; &quot;lamboot&quot; across multiple machines.
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
<li><strong>Next message:</strong> <a href="16805.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open-MPI maffinity policy"</a>
<li><strong>Previous message:</strong> <a href="16803.php">Christian Anonymous: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16798.php">zhuangchao: "[OMPI users] The hostfile  could not be found"</a>
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
