<?
$subject_val = "[OMPI devel] MCA params";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 11 16:51:45 2015" -->
<!-- isoreceived="20150511205145" -->
<!-- sent="Mon, 11 May 2015 16:51:43 -0400" -->
<!-- isosent="20150511205143" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] MCA params" -->
<!-- id="CAMJJpkX0EqMUBWfgdaNB33k3fKAeyb_6k6y5rSMc4qOV=gdsTg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] MCA params<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-11 16:51:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17394.php">Nathan Hjelm: "Re: [OMPI devel] MCA params"</a>
<li><strong>Previous message:</strong> <a href="17392.php">Howard Pritchard: "[OMPI devel] oops, jenkins mishap"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17394.php">Nathan Hjelm: "Re: [OMPI devel] MCA params"</a>
<li><strong>Reply:</strong> <a href="17394.php">Nathan Hjelm: "Re: [OMPI devel] MCA params"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was looking to preconnect all MPI processes to remove some weird
<br>
behaviors. As I did not remembered the full name I hope to get that from
<br>
the ompi_info.
<br>
<p>$ ompi_info -a -l 9  | grep preco
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpi: parameter &quot;mpi_preconnect_all&quot; (current value:
<br>
&quot;false&quot;, data source: default, level: 9 dev/all, type: bool, deprecated,
<br>
synonym of: mpi_preconnect_mpi)
<br>
<p>so mpi_preconnect_all is a deprecated synonym to a non-existing parameter.
<br>
So be it!
<br>
<p>I then added &quot;mpi_preconnect_mpi = true&quot; to my
<br>
$(HOME).opemmpi/mca-params.conf file.
<br>
<p>ompi_info -a -l 9  | grep preco
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpi: parameter &quot;mpi_preconnect_all&quot; (current value:
<br>
&quot;true&quot;, data source: file ((null)), level: 9 dev/all, type: bool,
<br>
deprecated, synonym of: mpi_preconnect_mpi)
<br>
<p>While the change has been detected, the MCA system somehow got confused to
<br>
where this change is coming from (the source file is (null)). Not very user
<br>
friendly.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17393/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17394.php">Nathan Hjelm: "Re: [OMPI devel] MCA params"</a>
<li><strong>Previous message:</strong> <a href="17392.php">Howard Pritchard: "[OMPI devel] oops, jenkins mishap"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17394.php">Nathan Hjelm: "Re: [OMPI devel] MCA params"</a>
<li><strong>Reply:</strong> <a href="17394.php">Nathan Hjelm: "Re: [OMPI devel] MCA params"</a>
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
