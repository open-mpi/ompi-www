<?
$subject_val = "Re: [OMPI users] Continuous integration question...";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 22 19:50:07 2016" -->
<!-- isoreceived="20160622235007" -->
<!-- sent="Thu, 23 Jun 2016 08:50:04 +0900" -->
<!-- isosent="20160622235004" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Continuous integration question..." -->
<!-- id="ce4b3129-bfaf-47d8-8b32-8d158471bbc0_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAGKz=uJs2DBTWaR-oSxO1BCF55VUDG3hVntSAG9qMMyxRw1Qew_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Continuous integration question...<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-22 19:50:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29522.php">Richard C. Wagner: "[OMPI users] Shared Libraries"</a>
<li><strong>Previous message:</strong> <a href="29520.php">Jeff Hammond: "Re: [OMPI users] Continuous integration question..."</a>
<li><strong>In reply to:</strong> <a href="29520.php">Jeff Hammond: "Re: [OMPI users] Continuous integration question..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eric,
<br>
<p><p>an other option is to use mtt <a href="https://github.com/open-mpi/mtt">https://github.com/open-mpi/mtt</a>
<br>
<p>it can download/build/install the latest tarball, download/build/install 
<br>
your code and run it.
<br>
<p>results are uploaded into a database and you can browse the results via 
<br>
a webserver.
<br>
<p><p>This is not quite lightweight, but i guess it does what you need, so you 
<br>
do not need to re-invent the wheel
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 6/23/2016 4:14 AM, Jeff Hammond wrote:
<br>
<span class="quotelev1">&gt; The following may be a viable alternative.  Just a suggestion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; git clone --depth 10 -b v2.x 
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi-release.git">https://github.com/open-mpi/ompi-release.git</a> open-mpi-v2.x
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jun 22, 2016 at 8:30 PM, Eric Chamberland 
</span><br>
<span class="quotelev1">&gt; &lt;Eric.Chamberland_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Eric.Chamberland_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Excellent!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I will put all in place, then try both URLs and see which one is
</span><br>
<span class="quotelev1">&gt;     &quot;manageable&quot; for me!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Eric
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 22/06/16 02:10 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On Jun 22, 2016, at 2:06 PM, Eric Chamberland
</span><br>
<span class="quotelev1">&gt;         &lt;Eric.Chamberland_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:Eric.Chamberland_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 We have a similar mechanism already (that is used by
</span><br>
<span class="quotelev1">&gt;                 the Open MPI community for nightly regression
</span><br>
<span class="quotelev1">&gt;                 testing), but with the advantage that it will give you
</span><br>
<span class="quotelev1">&gt;                 a unique download filename (vs.
</span><br>
<span class="quotelev1">&gt;                 &quot;openmpi-v2.x-latest.bz2&quot; every night).  Do this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 wget
</span><br>
<span class="quotelev1">&gt;                 <a href="https://www.open-mpi.org/nightly/v2.x/latest_snapshot.txt">https://www.open-mpi.org/nightly/v2.x/latest_snapshot.txt</a>
</span><br>
<span class="quotelev1">&gt;                 wget
</span><br>
<span class="quotelev1">&gt;                 <a href="https://www.open-mpi.org/nightly/v2.x/openmpi-`cat">https://www.open-mpi.org/nightly/v2.x/openmpi-`cat</a>
</span><br>
<span class="quotelev1">&gt;                 &lt;<a href="https://www.open-mpi.org/nightly/v2.x/openmpi-cat">https://www.open-mpi.org/nightly/v2.x/openmpi-cat</a>&gt;
</span><br>
<span class="quotelev1">&gt;                 latest_snapshot.txt`.tar.bz2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 The nightly snapshots are created each night starting
</span><br>
<span class="quotelev1">&gt;                 around 9pm US Eastern.  New snapshots are created if
</span><br>
<span class="quotelev1">&gt;                 there were commits to the tree that day.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Nice!  But I have a concern about taking the nightly: it
</span><br>
<span class="quotelev1">&gt;             it &quot;just&quot; a snapshot, or is it &quot;somewhat validated&quot; before
</span><br>
<span class="quotelev1">&gt;             beeing a snapshot?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         It's just a snapshot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Or I could ask: is this snapshot stable enough to be
</span><br>
<span class="quotelev1">&gt;             tested by &quot;outsiders&quot;?  Is there any more &quot;stable&quot; branch
</span><br>
<span class="quotelev1">&gt;             to wget?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         This is a different branch than our head of development
</span><br>
<span class="quotelev1">&gt;         (master).  It tends to be pretty stable, but it does break
</span><br>
<span class="quotelev1">&gt;         sometimes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             If not, I would ask if there is a similar wget trick to
</span><br>
<span class="quotelev1">&gt;             get the latest &quot;release candidate&quot; or something more
</span><br>
<span class="quotelev1">&gt;             &quot;stable&quot; than a snapshot of the repository...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Release candidates move much more slowly than the nightly
</span><br>
<span class="quotelev1">&gt;         snapshots -- they're released at controlled points (e.g., we
</span><br>
<span class="quotelev1">&gt;         just did v2.0.0rc3, and we're likely to do a v2.0.0rc4 shortly
</span><br>
<span class="quotelev1">&gt;         with just a few more cleanups beyond rc3).  Those are found here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="https://www.open-mpi.org/software/ompi/v2.x/downloads/">https://www.open-mpi.org/software/ompi/v2.x/downloads/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I.e., you can do the same latest_snapshot.txt thing there:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         wget
</span><br>
<span class="quotelev1">&gt;         <a href="https://www.open-mpi.org/software/ompi/v2.x/downloads/latest_snapshot.txt">https://www.open-mpi.org/software/ompi/v2.x/downloads/latest_snapshot.txt</a>
</span><br>
<span class="quotelev1">&gt;         wget
</span><br>
<span class="quotelev1">&gt;         <a href="https://www.open-mpi.org/software/ompi/v2.x/downloads/openmpi-`cat">https://www.open-mpi.org/software/ompi/v2.x/downloads/openmpi-`cat</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="https://www.open-mpi.org/software/ompi/v2.x/downloads/openmpi-cat">https://www.open-mpi.org/software/ompi/v2.x/downloads/openmpi-cat</a>&gt;
</span><br>
<span class="quotelev1">&gt;         latest_snapshot.txt`.tar.bz2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/06/29519.php">http://www.open-mpi.org/community/lists/users/2016/06/29519.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; jeff.science_at_[hidden] &lt;mailto:jeff.science_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29520.php">http://www.open-mpi.org/community/lists/users/2016/06/29520.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29521/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29522.php">Richard C. Wagner: "[OMPI users] Shared Libraries"</a>
<li><strong>Previous message:</strong> <a href="29520.php">Jeff Hammond: "Re: [OMPI users] Continuous integration question..."</a>
<li><strong>In reply to:</strong> <a href="29520.php">Jeff Hammond: "Re: [OMPI users] Continuous integration question..."</a>
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
