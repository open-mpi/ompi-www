<?
$subject_val = "Re: [OMPI users] Setting bind-to none as default via environment?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 11:13:15 2015" -->
<!-- isoreceived="20151001151315" -->
<!-- sent="Thu, 1 Oct 2015 15:13:00 +0000" -->
<!-- isosent="20151001151300" -->
<!-- name="Grigory Shamov" -->
<!-- email="Grigory.Shamov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting bind-to none as default via environment?" -->
<!-- id="D232B750.7D88F%Grigory.Shamov_at_ad.umanitoba.ca" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="CAAbhqc6Q4=HpKzTaabjc+AkgxOOjwnsk9Ug4qTHcMgum_H6+-A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Setting bind-to none as default via environment?<br>
<strong>From:</strong> Grigory Shamov (<em>Grigory.Shamov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-01 11:13:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27767.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using mpifort(Intel)"</a>
<li><strong>Previous message:</strong> <a href="27765.php">Nick Papior: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>In reply to:</strong> <a href="27765.php">Nick Papior: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/27974.php">Lloyd Brown: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, I guess it be hwloc-base-binding-policy = in the file. Found it.
<br>
<p><pre>
--
Grigory Shamov
Westgrid/ComputeCanada Site Lead
University of Manitoba
E2-588 EITC Building,
(204) 474-9625
From: users &lt;users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt; on behalf of Nick Papior &lt;nickpapior_at_[hidden]&lt;mailto:nickpapior_at_[hidden]&gt;&gt;
Reply-To: Open MPI Users &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
Date: Thursday, 1 October, 2015 10:02 AM
To: Open MPI Users &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
Subject: Re: [OMPI users] Setting bind-to none as default via environment?
You can define default mca parameters in this file:
&lt;prefix&gt;/etc/openmpi-mca-params.conf
2015-10-01 16:57 GMT+02:00 Grigory Shamov &lt;Grigory.Shamov_at_[hidden]&lt;mailto:Grigory.Shamov_at_[hidden]&gt;&gt;:
Hi All,
A parhaps naive question: is it possible to set ' mpiexec &#151;bind-to none ' as a system-wide default in 1.10, like, by setting an OMPI_xxx variable?
--
Grigory Shamov
Westgrid/ComputeCanada Site Lead
University of Manitoba
E2-588 EITC Building,
(204) 474-9625&lt;tel:%28204%29%20474-9625&gt;
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27764.php">http://www.open-mpi.org/community/lists/users/2015/10/27764.php</a>
--
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27766/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27767.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using mpifort(Intel)"</a>
<li><strong>Previous message:</strong> <a href="27765.php">Nick Papior: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>In reply to:</strong> <a href="27765.php">Nick Papior: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/27974.php">Lloyd Brown: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
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
