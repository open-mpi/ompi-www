<?
$subject_val = "[MTT users] RETRY EXCEEDED ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 31 11:42:42 2008" -->
<!-- isoreceived="20080731154242" -->
<!-- sent="Thu, 31 Jul 2008 12:43:54 -0300" -->
<!-- isosent="20080731154354" -->
<!-- name="Rafael Folco" -->
<!-- email="rfolco_at_[hidden]" -->
<!-- subject="[MTT users] RETRY EXCEEDED ERROR" -->
<!-- id="1217519034.6812.28.camel_at_T42" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [MTT users] RETRY EXCEEDED ERROR<br>
<strong>From:</strong> Rafael Folco (<em>rfolco_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-31 11:43:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0597.php">Pavel Shamis (Pasha): "Re: [MTT users] RETRY EXCEEDED ERROR"</a>
<li><strong>Previous message:</strong> <a href="0595.php">Ethan Mallove: "[MTT users] Wiki page on INI includes (include_files and include_section)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0597.php">Pavel Shamis (Pasha): "Re: [MTT users] RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="0597.php">Pavel Shamis (Pasha): "Re: [MTT users] RETRY EXCEEDED ERROR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I need some help, please.
<br>
<p>I'm running a set of MTT tests on my cluster and I have issues in a
<br>
particular node. 
<br>
<p>[0,1,7][btl_openib_component.c:1332:btl_openib_component_progress] from
<br>
10.2.1.90 to: 10.2.1.50 error polling HP CQ with status RETRY EXCEEDED
<br>
ERROR status number 12 for wr_id 268870712 opcode 0
<br>
<p>I am able to ping from 10.2.1.90 to 10.2.1.50, and they are visible to
<br>
each other in the network, just like the other nodes. I've already
<br>
checked the drivers, reinstalled openmpi, but nothing changes...
<br>
<p>On 10.2.1.90:
<br>
# ping 10.2.1.50
<br>
PING 10.2.1.50 (10.2.1.50) 56(84) bytes of data.
<br>
64 bytes from 10.2.1.50: icmp_seq=1 ttl=64 time=9.95 ms
<br>
64 bytes from 10.2.1.50: icmp_seq=2 ttl=64 time=0.076 ms
<br>
64 bytes from 10.2.1.50: icmp_seq=3 ttl=64 time=0.114 ms
<br>
<p><p>The cable connections are the same to every node and all tests run fine
<br>
without &#239;&#187;&#191;10.2.1.90. In the other hand, when I add 10.2.1.90 to the
<br>
hostlist, I get many failures.
<br>
<p>Please, could someone tell me why 10.2.1.90 doesn't like 10.2.1.50 ? Any
<br>
clue?
<br>
<p>I don't see any problems with other combination of nodes. This is very
<br>
very weird.
<br>
<p><p>MTT Results Summary
<br>
hostname: p6ihopenhpc1-ib0
<br>
uname: Linux p6ihopenhpc1-ib0 2.6.16.60-0.21-ppc64 #1 SMP Tue May 6
<br>
12:41:02 UTC 2008 ppc64 ppc64 ppc64 GNU/Linux
<br>
who am i: root     pts/3        Jul 31 13:31 (elm3b150:S.0)
<br>
+-------------+-----------------+------+------+----------+------+
<br>
| Phase       | Section         | Pass | Fail | Time out | Skip |
<br>
+-------------+-----------------+------+------+----------+------+
<br>
| MPI install | openmpi-1.2.5   | 1    | 0    | 0        | 0    |
<br>
| Test Build  | trivial         | 1    | 0    | 0        | 0    |
<br>
| Test Build  | ibm             | 1    | 0    | 0        | 0    |
<br>
| Test Build  | onesided        | 1    | 0    | 0        | 0    |
<br>
| Test Build  | mpicxx          | 1    | 0    | 0        | 0    |
<br>
| Test Build  | imb             | 1    | 0    | 0        | 0    |
<br>
| Test Build  | netpipe         | 1    | 0    | 0        | 0    |
<br>
| Test Run    | trivial         | 4    | 4    | 0        | 0    |
<br>
| Test Run    | ibm             | 59   | 120  | 0        | 3    |
<br>
| Test Run    | onesided        | 95   | 37   | 0        | 0    |
<br>
| Test Run    | mpicxx          | 0    | 1    | 0        | 0    |
<br>
| Test Run    | imb correctness | 0    | 1    | 0        | 0    |
<br>
| Test Run    | imb performance | 0    | 12   | 0        | 0    |
<br>
| Test Run    | netpipe         | 1    | 0    | 0        | 0    |
<br>
+-------------+-----------------+------+------+----------+------+
<br>
<p><p>I also attached one of the errors here.
<br>
<p>Thanks in advance,
<br>
<p>Rafael
<br>
<p><pre>
-- 
Rafael Folco
OpenHPC / Brazil Test Lead
IBM Linux Technology Center
E-Mail: rfolco_at_[hidden]

</pre>
<p>
| command                  | mpirun --hostfile /tmp/ompi-core-testers/hosts.list -np 8 --mca btl          |
<br>
|                          | openib,self --mca btl_openib_warn_default_gid_prefix 0 --prefix              |
<br>
|                          | /usr/lib/mpi/gcc/openmpi collective/gather                                   |
<br>
| duration                 | 0 seconds                                                                    |
<br>
| exit_value               | 143                                                                          |
<br>
| result_message           | Failed; exit status: 143                                                     |
<br>
| result_stdout            | [0,1,7][btl_openib_component.c:1332:btl_openib_component_progress] from      |
<br>
|                          | 10.2.1.90 to: 10.2.1.50 error polling HP CQ with status RETRY EXCEEDED ERROR |
<br>
|                          | status number 12 for wr_id 268870712 opcode 0                                |
<br>
|                          | --------------------------------------------------------------------------   |
<br>
|                          | The InfiniBand retry count between two MPI processes has been                |
<br>
|                          | exceeded.  &quot;Retry count&quot; is defined in the InfiniBand spec 1.2               |
<br>
|                          | (section 12.7.38):                                                           |
<br>
|                          |                                                                              |
<br>
|                          |     The total number of times that the sender wishes the receiver to         |
<br>
|                          |     retry timeout, packet sequence, etc. errors before posting a             |
<br>
|                          |     completion error.                                                        |
<br>
|                          |                                                                              |
<br>
|                          | This error typically means that there is something awry within the           |
<br>
|                          | InfiniBand fabric itself.  You should note the hosts on which this           |
<br>
|                          | error has occurred; it has been observed that rebooting or removing a        |
<br>
|                          | particular host from the job can sometimes resolve this issue.                   |
<br>
|                          |                                                                              |
<br>
|                          | Two MCA parameters can be used to control Open MPI's behavior with           |
<br>
|                          | respect to the retry count:                                                  |
<br>
|                          |                                                                              |
<br>
|                          | * btl_openib_ib_retry_count - The number of times the sender will            |
<br>
|                          |   attempt to retry (defaulted to 7, the maximum value).                      |
<br>
|                          |                                                                              |
<br>
|                          | * btl_openib_ib_timeout - The local ACK timeout parameter (defaulted         |
<br>
|                          |   to 10).  The actual timeout value used is calculated as:                   |
<br>
|                          |                                                                              |
<br>
|                          |      4.096 microseconds * (2^btl_openib_ib_timeout)                          |
<br>
|                          |                                                                              |
<br>
|                          |   See the InfiniBand spec 1.2 (section 12.7.34) for more details.            |
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0597.php">Pavel Shamis (Pasha): "Re: [MTT users] RETRY EXCEEDED ERROR"</a>
<li><strong>Previous message:</strong> <a href="0595.php">Ethan Mallove: "[MTT users] Wiki page on INI includes (include_files and include_section)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0597.php">Pavel Shamis (Pasha): "Re: [MTT users] RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="0597.php">Pavel Shamis (Pasha): "Re: [MTT users] RETRY EXCEEDED ERROR"</a>
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
