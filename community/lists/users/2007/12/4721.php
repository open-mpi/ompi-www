<?
$subject_val = "Re: [OMPI users] Fwd: R npRmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 18 16:56:05 2007" -->
<!-- isoreceived="20071218215605" -->
<!-- sent="Tue, 18 Dec 2007 15:55:58 -0600" -->
<!-- isosent="20071218215558" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: R npRmpi" -->
<!-- id="18280.16878.666541.29285_at_ron.nulle.part" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="30D13157-B27B-4B11-BCFB-5C86B469E019_at_indiana.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: R npRmpi<br>
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-18 16:55:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4722.php">Allan Menezes: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<li><strong>Previous message:</strong> <a href="4720.php">Caird, Andrew J: "Re: [OMPI users] Fwd: R npRmpi"</a>
<li><strong>In reply to:</strong> <a href="4719.php">Randy Heiland: "[OMPI users] Fwd: R npRmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 18 December 2007 at 16:08, Randy Heiland wrote:
<br>
| The pkg in question is here:  <a href="http://www.stats.uwo.ca/faculty/yu/Rmpi/">http://www.stats.uwo.ca/faculty/yu/Rmpi/</a>
<br>
| 
<br>
| The question is:  has anyone on this list got OpenMPI working for  
<br>
| this pkg?  Any suggestions?
<br>
<p>Yes -- I happen to maintain GNU R, a number of R packages (eg r-cran-*) and
<br>
more for Debian and am also part of Debian's Open MPI maintainer group. I
<br>
also use Rmpi at work.
<br>
<p>Dr Yu and I sorted out all relevant issues a few weeks ago and the most
<br>
current Rmpi (ie 0.5-5) works out of the box on Debian and Ubuntu, and is
<br>
current in Debian.  It should &quot;just work&quot; on any other recent Linux and Unix
<br>
distro.  If not please report back what configure reports and where it fails.
<br>
<p>[ As an aside, we do have a current bug in Debian unstable with Open MPI as
<br>
we're trying to make transition between LAM, MPICH and Open MPI more
<br>
bullet-proof. If you use just Open MPI you should already be fine. ]
<br>
<p>Greeting from Chicago,  Dirk 
<br>
<p>| 
<br>
| thanks, Randy
<br>
| 
<br>
| 
<br>
| Begin forwarded message:
<br>
| 
<br>
| &gt;
<br>
| &gt; Subject: R npRmpi
<br>
| &gt;
<br>
| &gt; Been looking into the npRmpi problem
<br>
| &gt;
<br>
| &gt; I can get a segfault executing
<br>
| &gt;&gt; mpi.spawn.Rslaves()
<br>
| &gt;
<br>
| &gt; The documentation .html files under npRmpi contains the following:
<br>
| &gt;
<br>
| &gt; &quot;mpi.spawn.Rslaves to spawn R slaves on selected hosts. This is
<br>
| &gt; a LAM-MPI specific function.&quot;
<br>
| &gt;
<br>
| &gt;&gt; lamhosts()
<br>
| &gt; sh: lamnodes: command not found
<br>
| &gt;
<br>
| &gt; The documentation for nearly all mpi.xxx.xxx calls send you to
<br>
| &gt; www.lam-mpi.org for more information.
<br>
| &gt;
<br>
| &gt; Looks for all the world this package depends on LAM-MPI which
<br>
| &gt; is not installed on Quarry. I don't think pointing the build
<br>
| &gt; at an OpenMPI install will help. The .c sources will compile
<br>
| &gt; just fine but when R goes to use them it refers to LAM-MPI
<br>
| &gt; dependent functions and behaves  badly.
<br>
| &gt;
<br>
| 
<br>
| &lt;html&gt;&lt;body style=&quot;word-wrap: break-word; -webkit-nbsp-mode: space; -webkit-line-break: after-white-space; &quot;&gt;&lt;div&gt;The pkg in question is here: &#160;<a href="http://www.stats.uwo.ca/faculty/yu/Rmpi/">http://www.stats.uwo.ca/faculty/yu/Rmpi/</a>&lt;/div&gt;&lt;div&gt;&lt;br class=&quot;webkit-block-placeholder&quot;&gt;&lt;/div&gt;&lt;div&gt;The question is: &#160;has anyone on this list got OpenMPI working for this pkg? &#160;Any suggestions?&lt;/div&gt;&lt;div&gt;&lt;br class=&quot;webkit-block-placeholder&quot;&gt;&lt;/div&gt;&lt;div&gt;thanks, Randy&lt;br&gt;&lt;div&gt;&lt;span class=&quot;Apple-style-span&quot; style=&quot;border-collapse: separate; border-spacing: 0px 0px; color: rgb(0, 0, 0); font-family: Helvetica; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: auto; -khtml-text-decorations-in-effect: none; text-indent: 0px; -apple-text-size-adjust: auto; text-transform: none; orphans: 2; white-space: normal; widows: 2; word-spacing: 0px; &quot;&gt;&lt;br class=&quot;Apple-interchange-newline&quot;&gt;&lt;/span&gt; &lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;div&gt;Begin forwarded message:&lt;/di<br>
v&gt;&lt;br class=&quot;Apple-interchange-newline&quot;&gt;&lt;blockquote type=&quot;cite&quot;&gt;&lt;div style=&quot;margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; &quot;&gt;&lt;font class=&quot;Apple-style-span&quot; color=&quot;#000000&quot;&gt;&lt;b&gt;&lt;br&gt;&lt;/b&gt;&lt;/font&gt;&lt;/div&gt;&lt;div style=&quot;margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; &quot;&gt;&lt;font face=&quot;Helvetica&quot; size=&quot;3&quot; color=&quot;#000000&quot; style=&quot;font: 12.0px Helvetica; color: #000000&quot;&gt;&lt;b&gt;Subject: &lt;/b&gt;&lt;/font&gt;&lt;font face=&quot;Helvetica&quot; size=&quot;3&quot; style=&quot;font: 12.0px Helvetica&quot;&gt;&lt;b&gt;R npRmpi&lt;/b&gt;&lt;/font&gt;&lt;/div&gt;&lt;div style=&quot;margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; min-height: 14px; &quot;&gt;&lt;br&gt;&lt;/div&gt; &lt;div style=&quot;margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; &quot;&gt;Been looking into the npRmpi problem&lt;/div&gt;&lt;div style=&quot;margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; min-height: 14px; &quot;&gt;&lt;br&gt;&lt;/div&gt;&lt;div style=&quot;margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; &quot;&gt;I can get a segfault executing&lt;/div&gt; &lt;blockquote typ<br>
e=
<br>
&quot;cite&quot;&gt;&lt;div style=&quot;margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; &quot;&gt;mpi.spawn.Rslaves()&lt;/div&gt; &lt;/blockquote&gt;&lt;div style=&quot;margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; min-height: 14px; &quot;&gt;&lt;br&gt;&lt;/div&gt;&lt;div style=&quot;margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; &quot;&gt;The documentation .html files under npRmpi contains the following:&lt;/div&gt;&lt;div style=&quot;margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; min-height: 14px; &quot;&gt;&lt;br&gt;&lt;/div&gt;&lt;div style=&quot;margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; &quot;&gt;&quot;mpi.spawn.Rslaves to spawn R slaves on selected hosts. This is&lt;/div&gt;&lt;div style=&quot;margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; &quot;&gt;a LAM-MPI specific function.&quot;&lt;/div&gt;&lt;div style=&quot;margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; min-height: 14px; &quot;&gt;&lt;br&gt;&lt;/div&gt; &lt;blockquote type=&quot;cite&quot;&gt;&lt;div style=&quot;margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-l<br>
eft: 0px; &quot;&gt;lamhosts()&lt;/div&gt; &lt;/blockquote&gt;&lt;div style=&quot;margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; &quot;&gt;sh: lamnodes: command not found&lt;/div&gt;&lt;div style=&quot;margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; min-height: 14px; &quot;&gt;&lt;br&gt;&lt;/div&gt;&lt;div style=&quot;margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; &quot;&gt;The documentation for nearly all mpi.xxx.xxx calls send you to&lt;/div&gt;&lt;div style=&quot;margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; &quot;&gt;www.lam-mpi.org for more information.&lt;/div&gt;&lt;div style=&quot;margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; min-height: 14px; &quot;&gt;&lt;br&gt;&lt;/div&gt;&lt;div style=&quot;margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; &quot;&gt;Looks for all the world this package depends on LAM-MPI which&lt;/div&gt;&lt;div style=&quot;margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; &quot;&gt;is not installed on Quarry. I don't think pointing the build&lt;/div&gt;&lt;div style=&quot;margin-top: 0px;<br>
&nbsp;m
<br>
argin-right: 0px; margin-bottom: 0px; margin-left: 0px; &quot;&gt;at an OpenMPI install will help. The .c sources will compile&lt;/div&gt;&lt;div style=&quot;margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; &quot;&gt;just fine but when R goes to use them it refers to LAM-MPI&lt;/div&gt;&lt;div style=&quot;margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; &quot;&gt;dependent functions and behaves&lt;span class=&quot;Apple-converted-space&quot;&gt;&#160; &lt;/span&gt;badly.&lt;/div&gt;&lt;div style=&quot;margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; min-height: 14px; &quot;&gt;&lt;br&gt;&lt;/div&gt; &lt;/blockquote&gt;&lt;/div&gt;&lt;br&gt;&lt;/div&gt;&lt;/body&gt;&lt;/html&gt;_______________________________________________
<br>
| users mailing list
<br>
| users_at_[hidden]
<br>
| <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4722.php">Allan Menezes: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<li><strong>Previous message:</strong> <a href="4720.php">Caird, Andrew J: "Re: [OMPI users] Fwd: R npRmpi"</a>
<li><strong>In reply to:</strong> <a href="4719.php">Randy Heiland: "[OMPI users] Fwd: R npRmpi"</a>
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
