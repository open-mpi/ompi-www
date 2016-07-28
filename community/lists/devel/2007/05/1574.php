<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 23 15:12:14 2007" -->
<!-- isoreceived="20070523191214" -->
<!-- sent="Wed, 23 May 2007 15:11:54 -0400" -->
<!-- isosent="20070523191154" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] ORTE registry patch" -->
<!-- id="766E6649-2D99-4194-9108-BEDE8CB39209_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-23 15:11:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1575.php">Ralph H Castain: "Re: [OMPI devel] ORTE registry patch"</a>
<li><strong>Previous message:</strong> <a href="1573.php">George Bosilca: "Re: [OMPI devel] Strange schema error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1575.php">Ralph H Castain: "Re: [OMPI devel] ORTE registry patch"</a>
<li><strong>Reply:</strong> <a href="1575.php">Ralph H Castain: "Re: [OMPI devel] ORTE registry patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Attached is another patch to the ORTE layer, more specifically the  
<br>
replica. The idea is to decrease the number of strcmp by using a  
<br>
small hash function before doing the strcmp. The hask key for each  
<br>
registry entry is computed when it is added to the registry. When  
<br>
we're doing a query, instead of comparing the 2 strings we first  
<br>
check if the hash key match, and if they do match then we compare the  
<br>
2 strings in order to make sure we eliminate collisions from our  
<br>
answers.
<br>
<p>There is some benefit in terms of performance. It's hardly visible  
<br>
for few processes, but it start showing up when the number of  
<br>
processes increase. In fact the number of strcmp in the trace file  
<br>
drastically decrease. The main reason it works well, is because most  
<br>
of the keys start with basically the same chars (such as orte- 
<br>
blahblah) which transform the strcmp on a loop over few chars.
<br>
<p>Ralph, please consider it for inclusion on the ORTE layer.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>

<br><p>
<p><p><p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1574/replica.patch">replica.patch</a>
</ul>
<!-- attachment="replica.patch" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1574/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1575.php">Ralph H Castain: "Re: [OMPI devel] ORTE registry patch"</a>
<li><strong>Previous message:</strong> <a href="1573.php">George Bosilca: "Re: [OMPI devel] Strange schema error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1575.php">Ralph H Castain: "Re: [OMPI devel] ORTE registry patch"</a>
<li><strong>Reply:</strong> <a href="1575.php">Ralph H Castain: "Re: [OMPI devel] ORTE registry patch"</a>
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
