<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 29 12:05:05 2006" -->
<!-- isoreceived="20060929160505" -->
<!-- sent="Fri, 29 Sep 2006 12:03:12 -0400" -->
<!-- isosent="20060929160312" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help in Perl with MPI" -->
<!-- id="18C15690-B90E-4AD6-B048-7BD090D89C0A_at_umich.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="be9b52410609290854q7cd432c6wd821a85360316daa_at_mail.gmail.com" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-29 12:03:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1908.php">Prakash Velayutham: "Re: [OMPI users] Need help in Perl with MPI"</a>
<li><strong>Previous message:</strong> <a href="1906.php">Abhishek Pratap: "Re: [OMPI users] Need help in Perl with MPI"</a>
<li><strong>In reply to:</strong> <a href="1906.php">Abhishek Pratap: "Re: [OMPI users] Need help in Perl with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1908.php">Prakash Velayutham: "Re: [OMPI users] Need help in Perl with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 29, 2006, at 11:54 AM, Abhishek Pratap wrote:
<br>
<p><span class="quotelev1">&gt;  Hello All
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can i execute a perl program over MPI. My program has to access  
</span><br>
<span class="quotelev1">&gt; Mysql database for accessing the data during runtime.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; Is it Possible here  in perl i can use Perl's Parallel::MPI (or  
</span><br>
<span class="quotelev1">&gt; Parallel::MPI::Simple) but will they be able to access the mysql  
</span><br>
<span class="quotelev1">&gt; database simultaneously from  the server.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I dont see why not?  Just have each rank create its own DBI  
<br>
connection.  Use TCP connections to MySQL and transactions (Must use  
<br>
INNODB then) to prevent each client from walking on each other if  
<br>
thats posable.  Otherwise you don't need transactions.
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Abhishek
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/29/06, Prakash Velayutham &lt;prakash.velayutham_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Use Perl's Parallel::MPI (or Parallel::MPI::Simple) module. Get it  
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev1">&gt; CPAN. Documentation should be good enough to start with.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Prakash
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Abhishek Pratap wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Can i execute a code written in perl over with MPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My code also access a database present locally on the server.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am  new to this field . Looking for some help
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Abhishek
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; -----------------------------
</span><br>
<span class="quotelev1">&gt; Abhishek Pratap
</span><br>
<span class="quotelev1">&gt; Third Year
</span><br>
<span class="quotelev1">&gt; Bioinformatics
</span><br>
<span class="quotelev1">&gt; School of Biotechnology &amp; Chemical Eng
</span><br>
<span class="quotelev1">&gt; VIT
</span><br>
<span class="quotelev1">&gt; Vellore.
</span><br>
<span class="quotelev1">&gt; INDIA
</span><br>
<span class="quotelev1">&gt; Ph:   (91)-416-3206020
</span><br>
<span class="quotelev1">&gt; Mob: (91)-9843181010
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1907/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1908.php">Prakash Velayutham: "Re: [OMPI users] Need help in Perl with MPI"</a>
<li><strong>Previous message:</strong> <a href="1906.php">Abhishek Pratap: "Re: [OMPI users] Need help in Perl with MPI"</a>
<li><strong>In reply to:</strong> <a href="1906.php">Abhishek Pratap: "Re: [OMPI users] Need help in Perl with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1908.php">Prakash Velayutham: "Re: [OMPI users] Need help in Perl with MPI"</a>
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
