<?
$subject_val = "Re: [OMPI users] Shared memory";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 24 07:21:03 2010" -->
<!-- isoreceived="20100924112103" -->
<!-- sent="Fri, 24 Sep 2010 07:20:59 -0400" -->
<!-- isosent="20100924112059" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared memory" -->
<!-- id="AANLkTinXqjADoFziENoJOPLa0TgT1DnADcW4-_4mUauC_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimErUNpgSzY2qKhEedWVavHFj_y0Q++fUvw643G_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Shared memory<br>
<strong>From:</strong> Durga Choudhury (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-24 07:20:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14314.php">John Hearns: "Re: [OMPI users] Shared memory"</a>
<li><strong>Previous message:</strong> <a href="14312.php">Andrei Fokau: "[OMPI users] Shared memory"</a>
<li><strong>In reply to:</strong> <a href="14312.php">Andrei Fokau: "[OMPI users] Shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14314.php">John Hearns: "Re: [OMPI users] Shared memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is the data coming from a read-only file? In that case, a better way
<br>
might be to memory map that file in the root process and share the map
<br>
pointer in all the slave threads. This, like shared memory, will work
<br>
only for processes within a node, of course.
<br>
<p><p>On Fri, Sep 24, 2010 at 3:46 AM, Andrei Fokau
<br>
&lt;andrei.fokau_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; We use a C-program which consumes a lot of memory per process (up to few
</span><br>
<span class="quotelev1">&gt; GB), 99% of the data being the same for each process. So for us it would be
</span><br>
<span class="quotelev1">&gt; quite reasonable to put that part of data in a shared memory.
</span><br>
<span class="quotelev1">&gt; In the source code, the memory is allocated via malloc() function. What
</span><br>
<span class="quotelev1">&gt; would it require for us to change in the source code to be able to put that
</span><br>
<span class="quotelev1">&gt; repeating data in a shared memory?
</span><br>
<span class="quotelev1">&gt; The code is normally run on several nodes.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14314.php">John Hearns: "Re: [OMPI users] Shared memory"</a>
<li><strong>Previous message:</strong> <a href="14312.php">Andrei Fokau: "[OMPI users] Shared memory"</a>
<li><strong>In reply to:</strong> <a href="14312.php">Andrei Fokau: "[OMPI users] Shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14314.php">John Hearns: "Re: [OMPI users] Shared memory"</a>
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
