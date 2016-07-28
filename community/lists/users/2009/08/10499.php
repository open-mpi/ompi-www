<?
$subject_val = "Re: [OMPI users] Program runs successfully...but with error messages displayed";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 27 10:34:55 2009" -->
<!-- isoreceived="20090827143455" -->
<!-- sent="Thu, 27 Aug 2009 16:34:49 +0200" -->
<!-- isosent="20090827143449" -->
<!-- name="Yann JOBIC" -->
<!-- email="jobic_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program runs successfully...but with error messages displayed" -->
<!-- id="4A969989.2070609_at_polytech.univ-mrs.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="114756.53172.qm_at_web28310.mail.ukl.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Program runs successfully...but with error messages displayed<br>
<strong>From:</strong> Yann JOBIC (<em>jobic_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-27 10:34:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10500.php">Nifty Tom Mitchell: "Re: [OMPI users] explicit routing for multiple network interfaces"</a>
<li><strong>Previous message:</strong> <a href="10498.php">Lenny Verkhovsky: "[OMPI users] VMware and OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="10496.php">Jean Potsam: "[OMPI users] Program runs successfully...but with error messages displayed"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jean Potsam wrote:
<br>
<span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt;               I have installed openmpi 1.3.2 on one on the nodes of 
</span><br>
<span class="quotelev1">&gt; our cluster and is running a simple helloword mpi program. The program 
</span><br>
<span class="quotelev1">&gt; runs fine but I get a lot of unexpected messages in between the result.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ##########################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; jean_at_n06:~/examples$ mpirun -np 2 --host n06 hello_c
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [[11410,1],1]: A high-performance Open MPI point-to-point messaging module
</span><br>
<span class="quotelev1">&gt; was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Module: OpenFabrics (openib)
</span><br>
<span class="quotelev1">&gt;   Host: n06
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 2 and running on n06
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 1 of 2 and running on n06
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n06:08470] 1 more process has sent help message help-mpi-btl-base.txt 
</span><br>
<span class="quotelev1">&gt; / btl:no-nics
</span><br>
<span class="quotelev1">&gt; [n06:08470] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see 
</span><br>
<span class="quotelev1">&gt; all help / error messages
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ##########################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone know why these messages appear and how to fix this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jean
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; start: 0000-00-00 end: 0000-00-00
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
You can define some default parameter in the 
<br>
$OMPIDIR/etc/openmpi-mca-params.conf
<br>
<p>For instance, you can add :
<br>
# Exclude openib BTL, not currently supported
<br>
btl = ^openib,ofud
<br>
<p>Yann
<br>
<p><pre>
-- 
___________________________
Yann JOBIC
HPC engineer
Polytech Marseille DME
IUSTI-CNRS UMR 6595
Technop&#244;le de Ch&#226;teau Gombert
5 rue Enrico Fermi
13453 Marseille cedex 13
Tel : (33) 4 91 10 69 39
  ou  (33) 4 91 10 69 43
Fax : (33) 4 91 10 69 69 
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10499/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10500.php">Nifty Tom Mitchell: "Re: [OMPI users] explicit routing for multiple network interfaces"</a>
<li><strong>Previous message:</strong> <a href="10498.php">Lenny Verkhovsky: "[OMPI users] VMware and OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="10496.php">Jean Potsam: "[OMPI users] Program runs successfully...but with error messages displayed"</a>
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
