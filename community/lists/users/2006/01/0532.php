<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan 27 15:30:10 2006" -->
<!-- isoreceived="20060127203010" -->
<!-- sent="Fri, 27 Jan 2006 15:30:25 -0500" -->
<!-- isosent="20060127203025" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Mac OS X Open-MPI with Myrinet MX" -->
<!-- id="35875320-F4AA-4009-90C5-BED388F3E858_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1F2C792B-CF47-4BC2-8D60-890A442C2F97_at_apple.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-27 15:30:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0533.php">Tom Rosmond: "[O-MPI users] a familiar problem?"</a>
<li><strong>Previous message:</strong> <a href="0531.php">Warner Yuen: "[O-MPI users] Mac OS X Open-MPI with Myrinet MX"</a>
<li><strong>In reply to:</strong> <a href="0531.php">Warner Yuen: "[O-MPI users] Mac OS X Open-MPI with Myrinet MX"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please remove the lines 109 to 111 from the ompi/mca/btl/mx/ 
<br>
btl_mx_component.c file. They get in by accident, they belong to some  
<br>
other patch from the version 1.0.2 of Open MPI. It was not supposed  
<br>
to get back-ported to the 1.0.1.
<br>
<p>&nbsp;&nbsp;&nbsp;Sorry about the inconvenience,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jan 27, 2006, at 2:10 PM, Warner Yuen wrote:
<br>
<p><span class="quotelev1">&gt; With Mac OS X 10.4.4, I'm having problems compiling Open-MPI 1.0.1  
</span><br>
<span class="quotelev1">&gt; with Myrinet-MX support. It works fine with Myrinet-GM drivers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I configured with the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/hpc/mpis/ompi101 --with-mx=/opt/mx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm getting the following error when I run make:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /../.. -I../../../.. -I../../../../include -I../../../../opal - 
</span><br>
<span class="quotelev1">&gt; I../../../../orte -I../../../../ompi -D_REENTRANT -O3 -DNDEBUG -fno- 
</span><br>
<span class="quotelev1">&gt; strict-aliasing -MT btl_mx_component.lo -MD -MP -MF .deps/ 
</span><br>
<span class="quotelev1">&gt; btl_mx_component.Tpo -c btl_mx_component.c  -fno-common -DPIC - 
</span><br>
<span class="quotelev1">&gt; o .libs/btl_mx_component.o
</span><br>
<span class="quotelev1">&gt; btl_mx_component.c: In function 'mca_btl_mx_component_open':
</span><br>
<span class="quotelev1">&gt; btl_mx_component.c:108: warning: pointer targets in passing  
</span><br>
<span class="quotelev1">&gt; argument 7 of 'mca_base_param_reg_int' differ in signedness
</span><br>
<span class="quotelev1">&gt; btl_mx_component.c:111: error: 'mca_btl_mx_component_t' has no  
</span><br>
<span class="quotelev1">&gt; member named 'mx_timeout'
</span><br>
<span class="quotelev1">&gt; btl_mx_component.c:117: warning: pointer targets in passing  
</span><br>
<span class="quotelev1">&gt; argument 7 of 'mca_base_param_reg_int' differ in signedness
</span><br>
<span class="quotelev1">&gt; make[4]: *** [btl_mx_component.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Warner Yuen
</span><br>
<span class="quotelev1">&gt; Research Computing Consultant
</span><br>
<span class="quotelev1">&gt; Apple Computer
</span><br>
<span class="quotelev1">&gt; email: wyuen_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Tel: 408.718.2859
</span><br>
<span class="quotelev1">&gt; Fax: 408.715.0133
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
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0533.php">Tom Rosmond: "[O-MPI users] a familiar problem?"</a>
<li><strong>Previous message:</strong> <a href="0531.php">Warner Yuen: "[O-MPI users] Mac OS X Open-MPI with Myrinet MX"</a>
<li><strong>In reply to:</strong> <a href="0531.php">Warner Yuen: "[O-MPI users] Mac OS X Open-MPI with Myrinet MX"</a>
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
