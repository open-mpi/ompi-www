<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 27 10:17:02 2006" -->
<!-- isoreceived="20061027141702" -->
<!-- sent="Fri, 27 Oct 2006 10:16:56 -0400" -->
<!-- isosent="20061027141656" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] abut openmpi" -->
<!-- id="f869b68c0610270716r66552478s1846713c426cb62f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e0973f090610270225o514df5aby85f2235f7d0b53c3_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2006-10-27 10:16:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2070.php">Laurent.POREZ_at_[hidden]: "Re: [OMPI users] Error Handling Problem"</a>
<li><strong>Previous message:</strong> <a href="2068.php">calin pal: "[OMPI users] abut openmpi"</a>
<li><strong>In reply to:</strong> <a href="2068.php">calin pal: "[OMPI users] abut openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Calin
<br>
<p>You do not need to be root to do this. Just add the following line to your
<br>
.bashrc file, located in your home directory. (or an equivalent file if you
<br>
are not a bash user):
<br>
<p>export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/local/lib
<br>
(if you ran ./configure with a --prefix option, then use $prefix/lib instead
<br>
of /usr/local/lib)
<br>
<p>Start another shell after you have saved this file. Your problem should go
<br>
away. BTW, every user of your cluster has to do this in his/her ~/.bashrc
<br>
file. This has nothing to do with the root account.
<br>
<p>Good luck.
<br>
Durga
<br>
<p>On 10/27/06, calin pal &lt;calin.fc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sir,
</span><br>
<span class="quotelev1">&gt;         i have seen the problem according to u r suggestion.but sir
</span><br>
<span class="quotelev1">&gt; the actual roblem i m facing that.............
</span><br>
<span class="quotelev1">&gt;             in our college lab i have installed openmpi-1.1.1 tar.gz
</span><br>
<span class="quotelev1">&gt; in four computers
</span><br>
<span class="quotelev1">&gt;             from root using root password................
</span><br>
<span class="quotelev1">&gt;             (now i am doing program in local user...)
</span><br>
<span class="quotelev1">&gt;             so sir, if i have to give some value to LD_LIBRARY_PATH  for
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt;             again i have to go to root or i can access from user also....
</span><br>
<span class="quotelev1">&gt;             because in our college we dont have NFS......
</span><br>
<span class="quotelev1">&gt;             or sir, from root again i have to install openmpi -1.1.1
</span><br>
<span class="quotelev1">&gt; tar.gz
</span><br>
<span class="quotelev1">&gt;             then i have to set LD_LIBRARY_PATH...
</span><br>
<span class="quotelev1">&gt;             so plz sir tell me the actual solution.......
</span><br>
<span class="quotelev1">&gt;             what is the solution??????
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; calin
</span><br>
<span class="quotelev1">&gt; fergusson college,pune
</span><br>
<span class="quotelev1">&gt;   india
</span><br>
<span class="quotelev1">&gt;   msc.tech(maths &amp;comp.sc)
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
Devil wanted omnipresence;
He therefore created communists.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2069/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2070.php">Laurent.POREZ_at_[hidden]: "Re: [OMPI users] Error Handling Problem"</a>
<li><strong>Previous message:</strong> <a href="2068.php">calin pal: "[OMPI users] abut openmpi"</a>
<li><strong>In reply to:</strong> <a href="2068.php">calin pal: "[OMPI users] abut openmpi"</a>
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
