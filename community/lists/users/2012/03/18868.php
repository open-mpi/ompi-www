<?
$subject_val = "Re: [OMPI users] mpicc command not found - Fedora";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 29 08:27:10 2012" -->
<!-- isoreceived="20120329122710" -->
<!-- sent="Thu, 29 Mar 2012 14:27:05 +0200" -->
<!-- isosent="20120329122705" -->
<!-- name="Constantinos Makassikis" -->
<!-- email="cmakassikis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpicc command not found - Fedora" -->
<!-- id="CAN601uPvQz=m66mTPwL2og-rkY6BkAUxSbO+C7-+_+tkEz83NA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAFAE9jjJ4ZrYJj_p4tv1ZqrbRHqzAKvtesxEG9+JfhxAAv66Bg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpicc command not found - Fedora<br>
<strong>From:</strong> Constantinos Makassikis (<em>cmakassikis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-29 08:27:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18869.php">Hameed Alzahrani: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<li><strong>Previous message:</strong> <a href="18867.php">Rohan Deshpande: "[OMPI users] mpicc command not found - Fedora"</a>
<li><strong>In reply to:</strong> <a href="18867.php">Rohan Deshpande: "[OMPI users] mpicc command not found - Fedora"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18869.php">Hameed Alzahrani: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Did you try ortecc command directly ?
<br>
Perhaps the RPM package you're installing does not create symlinks from
<br>
ortecc to mpicc ...
<br>
<p><pre>
--
Constantinos
On Thu, Mar 29, 2012 at 1:45 PM, Rohan Deshpande &lt;rohand87_at_[hidden]&gt; wrote:
&gt; Hi,
&gt;
&gt; I have installed mpi successfully on fedora using *yum install openmpi
&gt; openmpi-devel openmpi-libs*
&gt; *
&gt; *
&gt; I have also added */usr/lib/openmpi/bin* to *PATH *and* LD_LIBRARY_PATH*variable.
&gt;
&gt; But when I try to complie my program using *mpicc hello.c* or*/usr/lib/openmpi/bin/mpicc hello.c
&gt; * I get error saying *mpicc: command not found*
&gt; *
&gt; *
&gt; I checked the contents of /user/lib/openmpi/bin and there is no mpicc...
&gt; here is the screenshot
&gt;
&gt;     [image: Inline image 2]
&gt;
&gt;
&gt; The add/remove  programs show the installation details
&gt;
&gt;  [image: Inline image 3]
&gt;
&gt; I have tried re installing but same thing happened.
&gt;
&gt; Can someone help me to solve this issue?
&gt;
&gt; Thanks
&gt; --
&gt;
&gt; Best Regards,
&gt;
&gt; ROHAN
&gt;
&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;


</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18868/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-18868/image.png" alt="image.png">
<!-- attachment="image.png" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-18868/03-image.png" alt="image.png">
<!-- attachment="03-image.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18869.php">Hameed Alzahrani: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<li><strong>Previous message:</strong> <a href="18867.php">Rohan Deshpande: "[OMPI users] mpicc command not found - Fedora"</a>
<li><strong>In reply to:</strong> <a href="18867.php">Rohan Deshpande: "[OMPI users] mpicc command not found - Fedora"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18869.php">Hameed Alzahrani: "Re: [OMPI users] mpicc command not found - Fedora"</a>
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
