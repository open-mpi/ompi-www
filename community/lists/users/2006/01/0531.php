<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan 27 14:10:16 2006" -->
<!-- isoreceived="20060127191016" -->
<!-- sent="Fri, 27 Jan 2006 11:10:10 -0800" -->
<!-- isosent="20060127191010" -->
<!-- name="Warner Yuen" -->
<!-- email="wyuen_at_[hidden]" -->
<!-- subject="[O-MPI users] Mac OS X Open-MPI with Myrinet MX" -->
<!-- id="1F2C792B-CF47-4BC2-8D60-890A442C2F97_at_apple.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Warner Yuen (<em>wyuen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-27 14:10:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0532.php">George Bosilca: "Re: [O-MPI users] Mac OS X Open-MPI with Myrinet MX"</a>
<li><strong>Previous message:</strong> <a href="0530.php">Dave Hudak: "[O-MPI users] libtool error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0532.php">George Bosilca: "Re: [O-MPI users] Mac OS X Open-MPI with Myrinet MX"</a>
<li><strong>Reply:</strong> <a href="0532.php">George Bosilca: "Re: [O-MPI users] Mac OS X Open-MPI with Myrinet MX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With Mac OS X 10.4.4, I'm having problems compiling Open-MPI 1.0.1  
<br>
with Myrinet-MX support. It works fine with Myrinet-GM drivers.
<br>
<p>I configured with the following:
<br>
<p>./configure --prefix=/hpc/mpis/ompi101 --with-mx=/opt/mx
<br>
<p>I'm getting the following error when I run make:
<br>
<p>/../.. -I../../../.. -I../../../../include -I../../../../opal - 
<br>
I../../../../orte -I../../../../ompi -D_REENTRANT -O3 -DNDEBUG -fno- 
<br>
strict-aliasing -MT btl_mx_component.lo -MD -MP -MF .deps/ 
<br>
btl_mx_component.Tpo -c btl_mx_component.c  -fno-common -DPIC - 
<br>
o .libs/btl_mx_component.o
<br>
btl_mx_component.c: In function 'mca_btl_mx_component_open':
<br>
btl_mx_component.c:108: warning: pointer targets in passing argument  
<br>
7 of 'mca_base_param_reg_int' differ in signedness
<br>
btl_mx_component.c:111: error: 'mca_btl_mx_component_t' has no member  
<br>
named 'mx_timeout'
<br>
btl_mx_component.c:117: warning: pointer targets in passing argument  
<br>
7 of 'mca_base_param_reg_int' differ in signedness
<br>
make[4]: *** [btl_mx_component.lo] Error 1
<br>
make[3]: *** [all-recursive] Error 1
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p>Warner Yuen
<br>
Research Computing Consultant
<br>
Apple Computer
<br>
email: wyuen_at_[hidden]
<br>
Tel: 408.718.2859
<br>
Fax: 408.715.0133
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0531/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0532.php">George Bosilca: "Re: [O-MPI users] Mac OS X Open-MPI with Myrinet MX"</a>
<li><strong>Previous message:</strong> <a href="0530.php">Dave Hudak: "[O-MPI users] libtool error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0532.php">George Bosilca: "Re: [O-MPI users] Mac OS X Open-MPI with Myrinet MX"</a>
<li><strong>Reply:</strong> <a href="0532.php">George Bosilca: "Re: [O-MPI users] Mac OS X Open-MPI with Myrinet MX"</a>
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
