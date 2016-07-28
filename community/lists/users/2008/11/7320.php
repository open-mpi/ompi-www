<?
$subject_val = "Re: [OMPI users] avoid usage of ssh on local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 17 04:32:13 2008" -->
<!-- isoreceived="20081117093213" -->
<!-- sent="Mon, 17 Nov 2008 10:31:41 +0100" -->
<!-- isosent="20081117093141" -->
<!-- name="Sun, Yongqi (E F ES EN 72)" -->
<!-- email="yongqi.sun_at_[hidden]" -->
<!-- subject="Re: [OMPI users] avoid usage of ssh on local machine" -->
<!-- id="EF9AA6DFC03E4D45A3BFE35E162D8AAD6AF105_at_DEERLS7E8A.ww007.siemens.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1DFF3CFE-EDCD-43EE-B6A6-769BCFD6AE5E_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] avoid usage of ssh on local machine<br>
<strong>From:</strong> Sun, Yongqi (E F ES EN 72) (<em>yongqi.sun_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-17 04:31:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7321.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>Previous message:</strong> <a href="7319.php">Ravi Manumachu: "[OMPI users] OpenMPI-1.2.8 issues on 64-bit Itanium platforms (IA64)"</a>
<li><strong>In reply to:</strong> <a href="7314.php">Ralph Castain: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7322.php">jody: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<li><strong>Reply:</strong> <a href="7322.php">jody: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I still have no clue how to use the local machine by default.
<br>
<p>My /etc/hosts file and the result of ifconfig are attached.
<br>
<p>I've tried gethostname() by myself but an abnormal result generated.
<br>
<p>My code is:
<br>
<p>///////////////////////////////////
<br>
#include &lt;unistd.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
int main() {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char name[20]; // a guess of the array size
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t len;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int res;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;res = gethostname(name, len);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;res = %d, name = %s, len = %lu&quot;, res, name, len); // on
<br>
my 64-bit machine, size_t is long unsigned, or?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
/////////////////////////////////
<br>
<p>And the resulting output is:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;res = 0, name = W71c-140644, len = 140737469359496&quot;
<br>
Where len is abnormally large.
<br>
<p><p>Best regards
<br>
<p>Sun
<br>
<p>

<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7320/ifconfig.out">ifconfig.out</a>
</ul>
<!-- attachment="ifconfig.out" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7320/hosts.out">hosts.out</a>
</ul>
<!-- attachment="hosts.out" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7321.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>Previous message:</strong> <a href="7319.php">Ravi Manumachu: "[OMPI users] OpenMPI-1.2.8 issues on 64-bit Itanium platforms (IA64)"</a>
<li><strong>In reply to:</strong> <a href="7314.php">Ralph Castain: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7322.php">jody: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<li><strong>Reply:</strong> <a href="7322.php">jody: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
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
