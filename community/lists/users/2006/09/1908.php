<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 29 12:06:44 2006" -->
<!-- isoreceived="20060929160644" -->
<!-- sent="Fri, 29 Sep 2006 12:06:40 -0400" -->
<!-- isosent="20060929160640" -->
<!-- name="Prakash Velayutham" -->
<!-- email="prakash.velayutham_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help in Perl with MPI" -->
<!-- id="451D4490.4050305_at_cchmc.org" -->
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
<strong>From:</strong> Prakash Velayutham (<em>prakash.velayutham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-29 12:06:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1909.php">Josh Durham: "[OMPI users] Building Open MPI 1.1.1 on OS X with ifort and icc support"</a>
<li><strong>Previous message:</strong> <a href="1907.php">Brock Palen: "Re: [OMPI users] Need help in Perl with MPI"</a>
<li><strong>In reply to:</strong> <a href="1906.php">Abhishek Pratap: "Re: [OMPI users] Need help in Perl with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1912.php">Abhishek Pratap: "Re: [OMPI users] Need help in Perl with MPI"</a>
<li><strong>Reply:</strong> <a href="1912.php">Abhishek Pratap: "Re: [OMPI users] Need help in Perl with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Yes. We do this all the time. But you should understand that the MySQL
<br>
database server becomes your bottle neck in this parallel environment.
<br>
In our case, we run the database servers also in parallel on the
<br>
scheduler assigned nodes. But this is very much application-specific.
<br>
<p>Thanks,
<br>
Prakash
<br>
<p>Abhishek Pratap wrote:
<br>
<span class="quotelev1">&gt; Hello All
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can i execute a perl program over MPI. My program has to access Mysql
</span><br>
<span class="quotelev1">&gt; database for accessing the data during runtime.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it Possible here  in perl i can use Perl's Parallel::MPI (or
</span><br>
<span class="quotelev1">&gt; Parallel::MPI::Simple) but will they be able to access the mysql database
</span><br>
<span class="quotelev1">&gt; simultaneously from  the server.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Abhishek
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/29/06, Prakash Velayutham &lt;prakash.velayutham_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Use Perl's Parallel::MPI (or Parallel::MPI::Simple) module. Get it from
</span><br>
<span class="quotelev2">&gt;&gt; CPAN. Documentation should be good enough to start with.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Prakash
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Abhishek Pratap wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Can i execute a code written in perl over with MPI.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; My code also access a database present locally on the server.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am  new to this field . Looking for some help
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Abhishek 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1909.php">Josh Durham: "[OMPI users] Building Open MPI 1.1.1 on OS X with ifort and icc support"</a>
<li><strong>Previous message:</strong> <a href="1907.php">Brock Palen: "Re: [OMPI users] Need help in Perl with MPI"</a>
<li><strong>In reply to:</strong> <a href="1906.php">Abhishek Pratap: "Re: [OMPI users] Need help in Perl with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1912.php">Abhishek Pratap: "Re: [OMPI users] Need help in Perl with MPI"</a>
<li><strong>Reply:</strong> <a href="1912.php">Abhishek Pratap: "Re: [OMPI users] Need help in Perl with MPI"</a>
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
