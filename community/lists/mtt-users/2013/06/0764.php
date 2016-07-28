<?
$subject_val = "[MTT users] mtt setup";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  4 08:19:48 2013" -->
<!-- isoreceived="20130604121948" -->
<!-- sent="Tue, 04 Jun 2013 14:19:02 +0200" -->
<!-- isosent="20130604121902" -->
<!-- name="sethi" -->
<!-- email="sethi_at_[hidden]" -->
<!-- subject="[MTT users] mtt setup" -->
<!-- id="51ADDB36.7070000_at_hlrs.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="51ADDA8B.5020906_at_hlrs.de" -->
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
<strong>Subject:</strong> [MTT users] mtt setup<br>
<strong>From:</strong> sethi (<em>sethi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-04 08:19:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0765.php">Jeff Squyres (jsquyres): "Re: [MTT users] mtt setup"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2013/02/0763.php">Jeff Squyres (jsquyres): "Re: [MTT users] Apply for an MTT username/password"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0765.php">Jeff Squyres (jsquyres): "Re: [MTT users] mtt setup"</a>
<li><strong>Reply:</strong> <a href="0765.php">Jeff Squyres (jsquyres): "Re: [MTT users] mtt setup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am setting up mtt testing in my institute. Clusters in my
<br>
institute don't have outbound access to mtt reporter link. So, I
<br>
download and run tests on the clusters. Then copy mtt-scratch to other
<br>
machine (with internet access) and run mtt with only reporter
<br>
configuration. Part of configuration is given below and complete file is
<br>
attached. Mtt with reporter configuration runs fine but results are not
<br>
uploaded. Can anybody, please give me a clue to resolve this issue?
<br>
<p>[Reporter: IU database]
<br>
module = MTTDatabase
<br>
<p>mttdatabase_realm = OMPI
<br>
mttdatabase_url = <a href="https://mtt.open-mpi.org/submit/">https://mtt.open-mpi.org/submit/</a>
<br>
# OMPI Core: Change this to be the username and password for your
<br>
# submit user.  Get this from the OMPI MTT administrator.
<br>
mttdatabase_username = ****
<br>
mttdatabase_password = ****
<br>
# OMPI Core: Change this to be some short string identifying your
<br>
# cluster.
<br>
mttdatabase_platform = lakhi_HLRS_nehalem_nodes
<br>
<p><p><p><p><p><p><p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0764/reporter.ini">reporter.ini</a>
</ul>
<!-- attachment="reporter.ini" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0765.php">Jeff Squyres (jsquyres): "Re: [MTT users] mtt setup"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2013/02/0763.php">Jeff Squyres (jsquyres): "Re: [MTT users] Apply for an MTT username/password"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0765.php">Jeff Squyres (jsquyres): "Re: [MTT users] mtt setup"</a>
<li><strong>Reply:</strong> <a href="0765.php">Jeff Squyres (jsquyres): "Re: [MTT users] mtt setup"</a>
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
