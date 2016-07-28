<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov  1 10:31:20 2006" -->
<!-- isoreceived="20061101153120" -->
<!-- sent="Wed, 1 Nov 2006 10:31:03 -0500" -->
<!-- isosent="20061101153103" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] about the openmpi problem" -->
<!-- id="3E82B06C-53B2-4B73-A995-BB9368739DAC_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="e0973f090611010017w1dcb267cs4f2485a320fe139c_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2006-11-01 10:31:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2103.php">Jeff Squyres: "Re: [OMPI users] Problem starting rank other than zero"</a>
<li><strong>Previous message:</strong> <a href="2101.php">George Bosilca: "Re: [OMPI users] OMPI Collectives"</a>
<li><strong>In reply to:</strong> <a href="2100.php">calin pal: "[OMPI users] about the openmpi problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All the installation problems are overlooked in our FAQ. The pointer  
<br>
to the FAQ is the following <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>. For all  
<br>
questions related to the installation of Open MPI  please refer to  
<br>
<a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a>. As far as I see, the  
<br>
answer to your question is already there (<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a> 
<br>
faq/?category=running#adding-ompi-to-path).
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Nov 1, 2006, at 3:17 AM, calin pal wrote:
<br>
<p><span class="quotelev1">&gt; sir,
</span><br>
<span class="quotelev1">&gt;        in   four machine of our college i have installed in this  
</span><br>
<span class="quotelev1">&gt; way..that i m sending u....
</span><br>
<span class="quotelev1">&gt; i start four machine from root...
</span><br>
<span class="quotelev1">&gt; then i installed the openmpi1.1.1 -tar.gz using the commands.....
</span><br>
<span class="quotelev3">&gt; &gt;&gt;tar -xvzf openmpi-1.1.1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;cd openmpi-1.1.1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;./configure --prefix=/usr/local
</span><br>
<span class="quotelev3">&gt; &gt;&gt;make
</span><br>
<span class="quotelev3">&gt; &gt;&gt;make all install
</span><br>
<span class="quotelev3">&gt; &gt;&gt;ompi_info
</span><br>
<span class="quotelev1">&gt; that i did in root
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then according to u r suggestion i went to user(where i did my  
</span><br>
<span class="quotelev1">&gt; program jacobi.c)
</span><br>
<span class="quotelev1">&gt; gave the password
</span><br>
<span class="quotelev1">&gt; then i wrote
</span><br>
<span class="quotelev3">&gt; &gt;&gt;cd .bashrc
</span><br>
<span class="quotelev3">&gt; &gt;&gt;export LD_LIBRARY_PATH=/usr/local/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt; &gt;&gt;source .bashrc
</span><br>
<span class="quotelev3">&gt; &gt;&gt;mpicc mpihello.c -o mpihello
</span><br>
<span class="quotelev3">&gt; &gt;&gt;mpirun -np 4 mpihello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; after did all this thing i m getting the problem libmpi:so  
</span><br>
<span class="quotelev1">&gt; file ......mpihello is not working
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what i supposed to do???????
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; should i have to install again????
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sir,please tell me the proper insatallation according to my  
</span><br>
<span class="quotelev1">&gt; problem........
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; calin..
</span><br>
<span class="quotelev1">&gt; fergusson college
</span><br>
<span class="quotelev1">&gt; msc.tech
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2103.php">Jeff Squyres: "Re: [OMPI users] Problem starting rank other than zero"</a>
<li><strong>Previous message:</strong> <a href="2101.php">George Bosilca: "Re: [OMPI users] OMPI Collectives"</a>
<li><strong>In reply to:</strong> <a href="2100.php">calin pal: "[OMPI users] about the openmpi problem"</a>
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
