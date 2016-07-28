<?
$subject_val = "Re: [OMPI users] Running simple MPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 23 15:10:38 2010" -->
<!-- isoreceived="20101023191038" -->
<!-- sent="Sat, 23 Oct 2010 14:10:33 -0500" -->
<!-- isosent="20101023191033" -->
<!-- name="Brandon Fulcher" -->
<!-- email="minguo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running simple MPI program" -->
<!-- id="AANLkTimiHViBkRqY9KtFaLjvO2GC2Crwip1jL+YV+jxC_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3D44605E-475B-47F8-988A-EDB0A4BF4C40_at_pittman.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running simple MPI program<br>
<strong>From:</strong> Brandon Fulcher (<em>minguo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-23 15:10:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14579.php">Gustavo Correa: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Previous message:</strong> <a href="14577.php">Ashley Pittman: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>In reply to:</strong> <a href="14577.php">Ashley Pittman: "Re: [OMPI users] Running simple MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14579.php">Gustavo Correa: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Reply:</strong> <a href="14579.php">Gustavo Correa: "Re: [OMPI users] Running simple MPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, so yes I'm trying to install the source but after installing, it does
<br>
not seem to be able to locate the libraries.
<br>
<p>mpirun gives the error
<br>
libopen-rte.so.0: cannot open shared object file: No such file or directory
<br>
<p>Of course, I have seen this faq
<br>
<a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
<br>
<p>But this is more than a little beyond me.  The libraries seem to be
<br>
installed in usr/lib, (at least, that's where it locates the library in
<br>
question.) but I can't seem to get this to work by modifying
<br>
LD_LIBRARY_PATH, or using the --prefix switch.  Obviously I am doing
<br>
something very wrong, never having bothered with editing paths before. (This
<br>
is why I use packages.)
<br>
<p>On Sat, Oct 23, 2010 at 1:47 PM, Ashley Pittman &lt;ashley_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 23 Oct 2010, at 17:58, Brandon Fulcher wrote:
</span><br>
<span class="quotelev2">&gt; &gt; So I checked the OMPI package details on both machines, they each are
</span><br>
<span class="quotelev1">&gt; running Open MPI 1.3. . . but then I noticed that the packages are different
</span><br>
<span class="quotelev1">&gt; versions.   Basically, the slave is running the previous Ubuntu release, and
</span><br>
<span class="quotelev1">&gt; the master is running the current one. Both have the most recent packages
</span><br>
<span class="quotelev1">&gt; for their release. . .but perhaps that is enough of a difference?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You need to have exactly the same version of OpenMPI installed on both
</span><br>
<span class="quotelev1">&gt; machines.  Typically in a cluster all machines are identical in terms of
</span><br>
<span class="quotelev1">&gt; software, if this isn't the case for your systems then the easiest way might
</span><br>
<span class="quotelev1">&gt; be to compile open mpi from source (on the older of the two machines would
</span><br>
<span class="quotelev1">&gt; be best) and to install it to a common directory on both machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley.
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14578/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14579.php">Gustavo Correa: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Previous message:</strong> <a href="14577.php">Ashley Pittman: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>In reply to:</strong> <a href="14577.php">Ashley Pittman: "Re: [OMPI users] Running simple MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14579.php">Gustavo Correa: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Reply:</strong> <a href="14579.php">Gustavo Correa: "Re: [OMPI users] Running simple MPI program"</a>
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
