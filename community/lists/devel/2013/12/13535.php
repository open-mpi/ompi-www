<?
$subject_val = "[OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 20 17:43:23 2013" -->
<!-- isoreceived="20131220224323" -->
<!-- sent="Fri, 20 Dec 2013 14:43:21 -0800" -->
<!-- isosent="20131220224321" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning" -->
<!-- id="CAAvDA170E5TASmsButza85wA9kT=WZ0SWFgNwG0tNpJH2GB4Hw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-20 17:43:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13536.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="13534.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13538.php">Dave Goodell (dgoodell): "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<li><strong>Reply:</strong> <a href="13538.php">Dave Goodell (dgoodell): "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a build of OMPI 1.7.4rc2r30031 on FreeBSD-9 finally.
<br>
I can (as I will detail in another email) run only singletons at the moment.
<br>
However, when I do I get a warning that is, IMHO, unnecessary:
<br>
<p>$ mpirun -np 1 examples/ring_c
<br>
--------------------------------------------------------------------------
<br>
WARNING: An invalid value was given for btl_tcp_if_exclude.  This
<br>
value will be ignored.
<br>
<p>&nbsp;&nbsp;Local host: freebsd9-amd64
<br>
&nbsp;&nbsp;Value:      127.0.0.1/8
<br>
&nbsp;&nbsp;Message:    Did not find interface matching this subnet
<br>
--------------------------------------------------------------------------
<br>
Process 0 sending 10 to 0, tag 201 (1 processes in ring)
<br>
Process 0 sent to 0
<br>
Process 0 decremented value: 9
<br>
Process 0 decremented value: 8
<br>
Process 0 decremented value: 7
<br>
Process 0 decremented value: 6
<br>
Process 0 decremented value: 5
<br>
Process 0 decremented value: 4
<br>
Process 0 decremented value: 3
<br>
Process 0 decremented value: 2
<br>
Process 0 decremented value: 1
<br>
Process 0 decremented value: 0
<br>
Process 0 exiting
<br>
<p>The warning is correct that no such interface exists.
<br>
However 127.0.0.1/24 DOES exist:
<br>
<p>$ ifconfig lo0 inet
<br>
lo0: flags=8049&lt;UP,LOOPBACK,RUNNING,MULTICAST&gt; metric 0 mtu 16384
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;options=600003&lt;RXCSUM,TXCSUM,RXCSUM_IPV6,TXCSUM_IPV6&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet 127.0.0.1 netmask 0xff000000
<br>
<p><p>I've confirmed that if_include and if_exclude have default values (not my
<br>
fault):
<br>
$ ompi_info --param btl tcp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_tcp_if_include&quot; (current value: &quot;&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data source: default, level: 1 user/basic, type:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;string)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Comma-delimited list of devices and/or CIDR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;notation of networks to use for MPI communication
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(e.g., &quot;eth0,192.168.0.0/16&quot;).  Mutually exclusive
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;with btl_tcp_if_exclude.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current value:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;127.0.0.1/8,sppp&quot;, data source: default, level: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;user/basic, type: string)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Comma-delimited list of devices and/or CIDR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;notation of networks to NOT use for MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;communication -- all devices not matching these
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;specifications will be used (e.g.,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;eth0,192.168.0.0/16&quot;).  If set to a non-default
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;value, it is mutually exclusive with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_tcp_if_include.
<br>
<p><p><p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13535/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13536.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="13534.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13538.php">Dave Goodell (dgoodell): "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<li><strong>Reply:</strong> <a href="13538.php">Dave Goodell (dgoodell): "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
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
