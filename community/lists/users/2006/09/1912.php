<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Sep 30 14:12:52 2006" -->
<!-- isoreceived="20060930181252" -->
<!-- sent="Sat, 30 Sep 2006 23:42:49 +0530" -->
<!-- isosent="20060930181249" -->
<!-- name="Abhishek Pratap" -->
<!-- email="abhishek.vit_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help in Perl with MPI" -->
<!-- id="be9b52410609301112n18091214i5e1e994f8e4b71e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="451D4490.4050305_at_cchmc.org" -->
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
<strong>From:</strong> Abhishek Pratap (<em>abhishek.vit_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-30 14:12:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/10/1913.php">Michael Kluskens: "[OMPI users] BLACS &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="1911.php">Lisandro Dalcin: "[OMPI users] problem with MPI_[Pack|Unpack]_external"</a>
<li><strong>In reply to:</strong> <a href="1908.php">Prakash Velayutham: "Re: [OMPI users] Need help in Perl with MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Prakash
<br>
<p>Thanks for replying man .I will try and put my issue in a detailed way.
<br>
<p>See i have a MPI installed on 4 machines networked. with one being the
<br>
server on which i have a Mysql database installed.
<br>
<p>Uptill now i had a perl program running serially on the server with string
<br>
comparison from the database , picks up a string and compares with ( n-1)
<br>
strings present in the database , so this takes up a lot of time as i have a
<br>
huge data which needs to be compared.
<br>
<p>Now i am trying to run this job parallely. will i be able to run the same
<br>
script using the Parallel::MPI module.
<br>
<p>How will the program run on multiprocessor accessing database present on the
<br>
main server.
<br>
<p><p>I hope you got my point. I will really appreciate your patience to  kindly
<br>
guide me on the same as i am stuck in this field as i am new  to MPI.
<br>
<p><p>Regards
<br>
<p>Abhishek
<br>
<p><p><p>On 9/29/06, Prakash Velayutham &lt;prakash.velayutham_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes. We do this all the time. But you should understand that the MySQL
</span><br>
<span class="quotelev1">&gt; database server becomes your bottle neck in this parallel environment.
</span><br>
<span class="quotelev1">&gt; In our case, we run the database servers also in parallel on the
</span><br>
<span class="quotelev1">&gt; scheduler assigned nodes. But this is very much application-specific.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Prakash
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Abhishek Pratap wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello All
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; can i execute a perl program over MPI. My program has to access Mysql
</span><br>
<span class="quotelev2">&gt; &gt; database for accessing the data during runtime.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is it Possible here  in perl i can use Perl's Parallel::MPI (or
</span><br>
<span class="quotelev2">&gt; &gt; Parallel::MPI::Simple) but will they be able to access the mysql
</span><br>
<span class="quotelev1">&gt; database
</span><br>
<span class="quotelev2">&gt; &gt; simultaneously from  the server.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Abhishek
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 9/29/06, Prakash Velayutham &lt;prakash.velayutham_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Use Perl's Parallel::MPI (or Parallel::MPI::Simple) module. Get it from
</span><br>
<span class="quotelev3">&gt; &gt;&gt; CPAN. Documentation should be good enough to start with.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Prakash
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Abhishek Pratap wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Can i execute a code written in perl over with MPI.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; My code also access a database present locally on the server.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; I am  new to this field . Looking for some help
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Abhishek
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
<p><p><p><pre>
-- 
-----------------------------
Abhishek Pratap
Third Year
Bioinformatics
School of Biotechnology &amp; Chemical Eng
VIT
Vellore.
INDIA
Ph:   (91)-416-3206020
Mob: (91)-9843181010
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1912/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/10/1913.php">Michael Kluskens: "[OMPI users] BLACS &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="1911.php">Lisandro Dalcin: "[OMPI users] problem with MPI_[Pack|Unpack]_external"</a>
<li><strong>In reply to:</strong> <a href="1908.php">Prakash Velayutham: "Re: [OMPI users] Need help in Perl with MPI"</a>
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
