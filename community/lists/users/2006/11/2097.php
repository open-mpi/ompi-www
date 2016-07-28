<?
$subject_val = "[OMPI users] about the openmpi problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  1 03:17:23 2006" -->
<!-- isoreceived="20061101081723" -->
<!-- sent="Wed, 1 Nov 2006 13:47:16 +0530" -->
<!-- isosent="20061101081716" -->
<!-- name="calin pal" -->
<!-- email="calin.fc_at_[hidden]" -->
<!-- subject="[OMPI users] about the openmpi problem" -->
<!-- id="e0973f090611010017w1dcb267cs4f2485a320fe139c_at_mail.gmail.com" -->
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
<strong>From:</strong> calin pal (<em>calin.fc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-01 03:17:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2098.php">George Bosilca: "Re: [OMPI users] OMPI Collectives"</a>
<li><strong>Previous message:</strong> <a href="../../2006/10/2096.php">Troy Telford: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2099.php">George Bosilca: "Re: [OMPI users] about the openmpi problem"</a>
<li><strong>Reply:</strong> <a href="2099.php">George Bosilca: "Re: [OMPI users] about the openmpi problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
sir,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in   four machine of our college i have installed in this way..that i
<br>
m sending u....
<br>
i start four machine from root...
<br>
then i installed the openmpi1.1.1 -tar.gz using the commands.....
<br>
<span class="quotelev2">&gt;&gt;tar -xvzf openmpi-1.1.1
</span><br>
<span class="quotelev2">&gt;&gt;cd openmpi-1.1.1
</span><br>
<span class="quotelev2">&gt;&gt;./configure --prefix=/usr/local
</span><br>
<span class="quotelev2">&gt;&gt;make
</span><br>
<span class="quotelev2">&gt;&gt;make all install
</span><br>
<span class="quotelev2">&gt;&gt;ompi_info
</span><br>
that i did in root
<br>
<p>then according to u r suggestion i went to user(where i did my program
<br>
jacobi.c)
<br>
gave the password
<br>
then i wrote
<br>
<span class="quotelev2">&gt;&gt;cd .bashrc
</span><br>
<span class="quotelev2">&gt;&gt;export LD_LIBRARY_PATH=/usr/local/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt;source .bashrc
</span><br>
<span class="quotelev2">&gt;&gt;mpicc mpihello.c -o mpihello
</span><br>
<span class="quotelev2">&gt;&gt;mpirun -np 4 mpihello
</span><br>
<p>after did all this thing i m getting the problem libmpi:so file
<br>
......mpihello is not working
<br>
<p>what i supposed to do???????
<br>
<p>should i have to install again????
<br>
<p>sir,please tell me the proper insatallation according to my problem........
<br>
<p>calin..
<br>
fergusson college
<br>
msc.tech
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-2097/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2098.php">George Bosilca: "Re: [OMPI users] OMPI Collectives"</a>
<li><strong>Previous message:</strong> <a href="../../2006/10/2096.php">Troy Telford: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2099.php">George Bosilca: "Re: [OMPI users] about the openmpi problem"</a>
<li><strong>Reply:</strong> <a href="2099.php">George Bosilca: "Re: [OMPI users] about the openmpi problem"</a>
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
