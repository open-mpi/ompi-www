<?
$subject_val = "[OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 27 23:47:21 2012" -->
<!-- isoreceived="20120228044721" -->
<!-- sent="Tue, 28 Feb 2012 09:47:15 +0500" -->
<!-- isosent="20120228044715" -->
<!-- name="Syed Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="[OMPI users] Could not execute the executable &amp;quot;/home/MET/hrm/bin/hostlist&amp;quot;: Exec format error" -->
<!-- id="CAMvdAsLruWt8V5vBuAJRbAxNq5vNUPhzy46Tbk=TWime6tQPrQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error<br>
<strong>From:</strong> Syed Ahsan Ali (<em>ahsanshah01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-27 23:47:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18568.php">PukkiMonkey: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<li><strong>Previous message:</strong> <a href="18566.php">Shiqing Fan: "Re: [OMPI users] OpenMPI at windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18568.php">PukkiMonkey: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<li><strong>Reply:</strong> <a href="18568.php">PukkiMonkey: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
<p>I am running an application with mpirun but it gives following error, it is
<br>
not picking up hostlist, there are other applications which run well with
<br>
hostlist but it just gives following error with
<br>
<p><p>&nbsp;[pmdtest_at_pmd02 d00_dayfiles]$ tail -f *_hrm
<br>
mpirun -np  /home/MET/hrm/bin/hrm
<br>
--------------------------------------------------------------------------
<br>
Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format
<br>
error
<br>
<p>This could mean that your PATH or executable name is wrong, or that you do
<br>
not
<br>
have the necessary permissions.  Please ensure that the executable is able
<br>
to be
<br>
found and executed.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>Following the permission of the hostlist directory. Please help me to
<br>
remove this error.
<br>
<p>&nbsp;[pmdtest_at_pmd02 bin]$ ll
<br>
total 7570
<br>
-rwxrwxrwx 1 pmdtest pmdtest 2517815 Feb 16  2012 gme2hrm
<br>
-rwxrwxrwx 1 pmdtest pmdtest       0 Feb 16  2012 gme2hrm.map
<br>
*-rwxrwxrwx 1 pmdtest pmdtest     473 Jan 30  2012 hostlist*
<br>
-rwxrwxrwx 1 pmdtest pmdtest 5197698 Feb 16  2012 hrm
<br>
-rwxrwxrwx 1 pmdtest pmdtest       0 Dec 31  2010 hrm.map
<br>
-rwxrwxrwx 1 pmdtest pmdtest    1680 Dec 31  2010 mpd.hosts
<br>
<p><p>Thank you and Regards
<br>
Ahsan
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18567/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18568.php">PukkiMonkey: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<li><strong>Previous message:</strong> <a href="18566.php">Shiqing Fan: "Re: [OMPI users] OpenMPI at windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18568.php">PukkiMonkey: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<li><strong>Reply:</strong> <a href="18568.php">PukkiMonkey: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
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
