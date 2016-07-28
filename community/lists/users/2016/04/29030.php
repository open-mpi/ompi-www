<?
$subject_val = "[OMPI users] Ubuntu and LD_LIBRARY_PATH";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 25 13:34:46 2016" -->
<!-- isoreceived="20160425173446" -->
<!-- sent="Mon, 25 Apr 2016 18:34:47 +0100" -->
<!-- isosent="20160425173447" -->
<!-- name="Rob Malpass" -->
<!-- email="lug_at_[hidden]" -->
<!-- subject="[OMPI users] Ubuntu and LD_LIBRARY_PATH" -->
<!-- id="00ca01d19f18$c3a90300$4afb0900$_at_getiton.myzen.co.uk" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Ubuntu and LD_LIBRARY_PATH<br>
<strong>From:</strong> Rob Malpass (<em>lug_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-25 13:34:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29031.php">Ralph Castain: "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="29029.php">Gus Correa: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29031.php">Ralph Castain: "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<li><strong>Reply:</strong> <a href="29031.php">Ralph Castain: "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<li><strong>Reply:</strong> <a href="29036.php">Dave Love: "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi 
<br>
<p>&nbsp;
<br>
<p>Sorry if this isn't 100% relevant to this list but I'm at my wits end.
<br>
<p>&nbsp;
<br>
<p>After a lot of hacking, I've finally configured openmpi on my Ubuntu
<br>
cluster.   I had been having awful problems with not being able to find the
<br>
libraries on the remote nodes but apparently the workaround is to use
<br>
ld.conf.so.d/*.conf
<br>
<p>&nbsp;
<br>
<p>I have compiled and run an example and it has worked but as it is not
<br>
recommended practice, can I please ask if there is a better / more elegant
<br>
workaround?   It is still the case that LD_LIBRARY_PATH is not set (because
<br>
no dot files like .profile, .bashrc etc) get executed when a non-interactive
<br>
ssh session takes place).   Is this going to cause me problems later?
<br>
<p>&nbsp;
<br>
<p>Thanks
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29030/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29031.php">Ralph Castain: "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="29029.php">Gus Correa: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29031.php">Ralph Castain: "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<li><strong>Reply:</strong> <a href="29031.php">Ralph Castain: "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<li><strong>Reply:</strong> <a href="29036.php">Dave Love: "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
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
