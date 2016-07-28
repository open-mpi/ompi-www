<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov  3 09:30:19 2006" -->
<!-- isoreceived="20061103143019" -->
<!-- sent="Fri, 3 Nov 2006 09:30:12 -0500" -->
<!-- isosent="20061103143012" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi problem" -->
<!-- id="f869b68c0611030630ne14c2b7gaeb02dcf9ac2cc12_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Durga Choudhury (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-03 09:30:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2133.php">George Bosilca: "Re: [OMPI users] OMPI collectives"</a>
<li><strong>Previous message:</strong> <a href="2131.php">Jeff Squyres: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>In reply to:</strong> <a href="2129.php">calin pal: "[OMPI users] openmpi problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Calin
<br>
<p>Your questions don't belong in this forum. You either need to be computer
<br>
literate (your questions are basic OS related) or delegate this task to
<br>
someone more experienced.
<br>
<p>Good luck
<br>
Durga
<br>
<p><p>On 11/3/06, calin pal &lt;calin.fc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /*****please read the mail and ans my query*****/
</span><br>
<span class="quotelev1">&gt; sir,
</span><br>
<span class="quotelev1">&gt;        in   four machine of our college i have installed in this way..that
</span><br>
<span class="quotelev1">&gt; i m sending u....
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
<span class="quotelev1">&gt; then according to u r suggestion i went to user(where i did my program
</span><br>
<span class="quotelev1">&gt; jacobi.c)
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
<span class="quotelev1">&gt; after did all this thing i m getting the problem libmpi:so file
</span><br>
<span class="quotelev1">&gt; ......&quot;mpihello&quot; is not working
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
<span class="quotelev1">&gt; anything wrong in the installation ????   sir i cant undersatnd from the
</span><br>
<span class="quotelev1">&gt; FAQ whatever u have suggested to see me....thats why i m asking again sir
</span><br>
<span class="quotelev1">&gt; please tell me whatever i have done in our computer is this okay or anything
</span><br>
<span class="quotelev1">&gt; i have to change in the code what i have written in the above code please
</span><br>
<span class="quotelev1">&gt; check it out sir ........and tell me whats wrong in my code ........please
</span><br>
<span class="quotelev1">&gt; sir.....please sir read the command also which i have used for installation
</span><br>
<span class="quotelev1">&gt; in root and user for running the openmpi-1.1.1.tar.gz .......please see
</span><br>
<span class="quotelev1">&gt; it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; calin pal
</span><br>
<span class="quotelev1">&gt;  msctech(maths and compsc)
</span><br>
<span class="quotelev1">&gt; pune ,india
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Devil wanted omnipresence;
He therefore created communists.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2132/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2133.php">George Bosilca: "Re: [OMPI users] OMPI collectives"</a>
<li><strong>Previous message:</strong> <a href="2131.php">Jeff Squyres: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>In reply to:</strong> <a href="2129.php">calin pal: "[OMPI users] openmpi problem"</a>
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
