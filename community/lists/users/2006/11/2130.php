<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov  3 07:46:50 2006" -->
<!-- isoreceived="20061103124650" -->
<!-- sent="Fri, 3 Nov 2006 07:46:29 -0500" -->
<!-- isosent="20061103124629" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi problem" -->
<!-- id="A1BFCF98-2E17-4B7C-B209-E6F2152FA2D1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="e0973f090611030229i7671fa6bhb47bd132d67a8bc7_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-03 07:46:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2131.php">Jeff Squyres: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>Previous message:</strong> <a href="2129.php">calin pal: "[OMPI users] openmpi problem"</a>
<li><strong>In reply to:</strong> <a href="2129.php">calin pal: "[OMPI users] openmpi problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2132.php">Durga Choudhury: "Re: [OMPI users] openmpi problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I thought that George answered your mail already...?
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2006/11/2102.php">http://www.open-mpi.org/community/lists/users/2006/11/2102.php</a>
<br>
<p><p>On Nov 3, 2006, at 5:29 AM, calin pal wrote:
<br>
<p><span class="quotelev1">&gt; /*****please read the mail and ans my query*****/
</span><br>
<span class="quotelev1">&gt; sir,
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
<span class="quotelev1">&gt; file ......&quot;mpihello&quot; is not working
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what i supposed to do???????
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; should i have to install again???
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; anything wrong in the installation ????   sir i cant undersatnd  
</span><br>
<span class="quotelev1">&gt; from the FAQ whatever u have suggested to see me....thats why i m  
</span><br>
<span class="quotelev1">&gt; asking again sir please tell me whatever i have done in our  
</span><br>
<span class="quotelev1">&gt; computer is this okay or anything i have to change in the code what  
</span><br>
<span class="quotelev1">&gt; i have written in the above code please check it out  
</span><br>
<span class="quotelev1">&gt; sir ........and tell me whats wrong in my code ........please  
</span><br>
<span class="quotelev1">&gt; sir.....please sir read the command also which i have used for  
</span><br>
<span class="quotelev1">&gt; installation in root and user for running the  
</span><br>
<span class="quotelev1">&gt; openmpi-1.1.1.tar.gz .......please see it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; calin pal
</span><br>
<span class="quotelev1">&gt;  msctech(maths and compsc)
</span><br>
<span class="quotelev1">&gt; pune ,india
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2131.php">Jeff Squyres: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>Previous message:</strong> <a href="2129.php">calin pal: "[OMPI users] openmpi problem"</a>
<li><strong>In reply to:</strong> <a href="2129.php">calin pal: "[OMPI users] openmpi problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2132.php">Durga Choudhury: "Re: [OMPI users] openmpi problem"</a>
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
