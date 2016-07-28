<?
$subject_val = "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 05:31:05 2010" -->
<!-- isoreceived="20100426093105" -->
<!-- sent="Mon, 26 Apr 2010 21:31:00 +1200" -->
<!-- isosent="20100426093100" -->
<!-- name="Asad Ali" -->
<!-- email="asad06_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS" -->
<!-- id="h2x28d120cc1004260231r7c301c5dy11fd8ab79450e5bc_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3404FF7F-2192-4DFB-98D5-94E7BA19AEA6_at_pittman.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS<br>
<strong>From:</strong> Asad Ali (<em>asad06_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-26 05:31:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12781.php">Tim Prince: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Previous message:</strong> <a href="12779.php">Conboy, James: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>In reply to:</strong> <a href="12776.php">Ashley Pittman: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12781.php">Tim Prince: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Reply:</strong> <a href="12781.php">Tim Prince: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Reply:</strong> <a href="12793.php">Dave Love: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Apr 26, 2010 at 8:01 PM, Ashley Pittman &lt;ashley_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 25 Apr 2010, at 22:27, Asad Ali wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes I use different machines such as
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; machine 1 uses AMD Opterons. (Fedora)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; machine 2 and 3 use Intel Xeons. (CentOS)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; machine 4 uses slightly older Intel Xeons. (Debian)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Only machine 1 gives correct results.  While CentOS and Debian results
</span><br>
<span class="quotelev1">&gt; are same but are wrong and different from those of machine 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you verified the are actually wrong or are they just different?  It's
</span><br>
<span class="quotelev1">&gt; actually perfectly possible for the same program to get different results
</span><br>
<span class="quotelev1">&gt; from run to run even on the same hardware and the same OS.  All floating
</span><br>
<span class="quotelev1">&gt; point operations by the MPI library are expected to be deterministic but
</span><br>
<span class="quotelev1">&gt; changing the process layout or and MPI settings can affect this and of
</span><br>
<span class="quotelev1">&gt; course anything the application does can introduce differences as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The code is the same with the same input/output and the same constants etc.
<br>
<span class="quotelev1">&gt;From run to run the results can only be different if you either use
</span><br>
different input/output or use different random number seeds. Here in my case
<br>
the random number seeds are the same as well. This means that this code must
<br>
give (and it does) the same results no matter how many times you run it. I
<br>
didn't tamper with mpi-settings for any run. I have verified that results of
<br>
only Fedora are correct because I know what is in my data and how should my
<br>
model behave and I get a nearly perfect convergence on Fedora OS. Even my
<br>
dual core laptop with Ubuntu 9.10 also gives correct results. The other OSs
<br>
give the same results for a few hundred iterations as Fedora but then an
<br>
unusual thing happens and the results start getting wrong.
<br>
<p>Cheers,
<br>
<p>Asad
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev1">&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><p><p><pre>
-- 
&quot;Statistical thinking will one day be as necessary for efficient citizenship
as the ability to read and write.&quot; - H.G. Wells
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12780/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12781.php">Tim Prince: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Previous message:</strong> <a href="12779.php">Conboy, James: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>In reply to:</strong> <a href="12776.php">Ashley Pittman: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12781.php">Tim Prince: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Reply:</strong> <a href="12781.php">Tim Prince: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Reply:</strong> <a href="12793.php">Dave Love: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
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
