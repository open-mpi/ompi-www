<?
$subject_val = "Re: [OMPI users] Program runs successfully...but with error messages displayed";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 27 07:59:37 2009" -->
<!-- isoreceived="20090827115937" -->
<!-- sent="Thu, 27 Aug 2009 14:59:30 +0300" -->
<!-- isosent="20090827115930" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program runs successfully...but with error messages displayed" -->
<!-- id="453d39990908270459uefd99aat906d088a85122d6e_at_mail.gmail.com" -->
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
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-27 07:59:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10498.php">Lenny Verkhovsky: "[OMPI users] VMware and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="10496.php">Jean Potsam: "[OMPI users] Program runs successfully...but with error messages displayed"</a>
<li><strong>In reply to:</strong> <a href="10496.php">Jean Potsam: "[OMPI users] Program runs successfully...but with error messages displayed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10499.php">Yann JOBIC: "Re: [OMPI users] Program runs successfully...but with error messages displayed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
mostlike that you compiled MPI with --with-openib flag, but since there are
<br>
no openib devices avaliable on
<br>
n06 machine, you got an error.
<br>
you can &quot;disable&quot; this message by either recompilnig Open MPI without openib
<br>
flag, or by disabling openib btl
<br>
-mca btl ^openib
<br>
or
<br>
-mca btl sm,self,tcp
<br>
Lenny.
<br>
<p>On Thu, Aug 27, 2009 at 1:36 PM, Jean Potsam &lt;jeanpotsam_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt;               I have installed openmpi 1.3.2 on one on the nodes of our
</span><br>
<span class="quotelev1">&gt; cluster and is running a simple helloword mpi program. The program runs fine
</span><br>
<span class="quotelev1">&gt; but I get a lot of unexpected messages in between the result.
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
<span class="quotelev1">&gt; [n06:08470] 1 more process has sent help message help-mpi-btl-base.txt /
</span><br>
<span class="quotelev1">&gt; btl:no-nics
</span><br>
<span class="quotelev1">&gt; [n06:08470] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all
</span><br>
<span class="quotelev1">&gt; help / error messages
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
<span class="quotelev1">&gt; start: 0000-00-00 end: 0000-00-00
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10497/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10498.php">Lenny Verkhovsky: "[OMPI users] VMware and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="10496.php">Jean Potsam: "[OMPI users] Program runs successfully...but with error messages displayed"</a>
<li><strong>In reply to:</strong> <a href="10496.php">Jean Potsam: "[OMPI users] Program runs successfully...but with error messages displayed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10499.php">Yann JOBIC: "Re: [OMPI users] Program runs successfully...but with error messages displayed"</a>
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
