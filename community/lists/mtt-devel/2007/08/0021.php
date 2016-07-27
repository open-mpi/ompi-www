<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 27 11:45:09 2007" -->
<!-- isoreceived="20070827154509" -->
<!-- sent="Mon, 27 Aug 2007 11:45:03 -0400" -->
<!-- isosent="20070827154503" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Thoughts on tagging..." -->
<!-- id="20070827154502.GI12598_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="83E0DD85-EB69-430F-B4EA-B5381B7A1ED1_at_cisco.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-27 11:45:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0022.php">Ethan Mallove: "Re: [MTT devel] Performance Graph Notes"</a>
<li><strong>Previous message:</strong> <a href="0020.php">Jeff Squyres: "Re: [MTT devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<li><strong>In reply to:</strong> <a href="0006.php">Jeff Squyres: "[MTT devel] Thoughts on tagging..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0041.php">Josh Hursey: "Re: [MTT devel] Thoughts on tagging..."</a>
<li><strong>Reply:</strong> <a href="0041.php">Josh Hursey: "Re: [MTT devel] Thoughts on tagging..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With regards to a Gmail-style interface for labeling, got a
<br>
comment/concern on the SQL. 
<br>
<p>IIRC, when cherry-picking was implemented (for performance
<br>
reports), we attempted to compose a WHERE clause that would
<br>
effect the cherry-pick. This led to some wild WHERE clauses.
<br>
E.g., consider the following example:
<br>
<p>&nbsp;&nbsp;+---+----+----+----+---+
<br>
&nbsp;&nbsp;|#  |A   |B   |C   |D  |
<br>
&nbsp;&nbsp;+---+----+----+----+---+
<br>
&nbsp;&nbsp;|1  |1   |2   |3   |4  |
<br>
&nbsp;&nbsp;|2  |5   |6   |7   |8  |
<br>
&nbsp;&nbsp;|3  |9   |10  |11  |12 |
<br>
&nbsp;&nbsp;|4  |28  |10  |11  |12 |
<br>
&nbsp;&nbsp;|5  |29  |10  |11  |12 |
<br>
&nbsp;&nbsp;+---+----+----+----+---+
<br>
<p>If we want to cherry-pick lines 1, 2 and 3, then our WHERE
<br>
clause will look like this:
<br>
<p>&nbsp;&nbsp;SELECT blah blah FROM blah,blah
<br>
&nbsp;&nbsp;WHERE
<br>
&nbsp;&nbsp;&nbsp;(A=1 AND B=2  AND C=3   AND D=4) OR
<br>
&nbsp;&nbsp;&nbsp;(A=5 AND B=6  AND C=7   AND D=8) OR
<br>
&nbsp;&nbsp;&nbsp;(A=9 AND B=10 AND C=11  AND D=12)
<br>
<p>We eventually chose do the filtering in PHP on row # since
<br>
there does not seem to be a good way to filter by row # in
<br>
SQL. The point being, a nasty WHERE clause *could* lead to a
<br>
loooong tag operation.
<br>
<p>Given the above, a good starting point might be to restrict
<br>
tagging to the following:
<br>
<p>&nbsp;&nbsp;1. Allow tagging only on entire reports
<br>
&nbsp;&nbsp;2. Allow tagging only on a single row at a time
<br>
<p>My $0.02.
<br>
<p>-Ethan
<br>
<p><p>On Fri, Aug/24/2007 03:07:54PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I volunteered to do this on the call today.  Here's my thoughts on  
</span><br>
<span class="quotelev1">&gt; tagging:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. From the client, it would be nice to be able to specify a comma- 
</span><br>
<span class="quotelev1">&gt; delimited list of tags at any phase.  Tags would be inherited by  
</span><br>
<span class="quotelev1">&gt; successive phases if not explicitly overridden.  E.g., if you specify  
</span><br>
<span class="quotelev1">&gt; a &quot;foo&quot; tag in an MPI get, it'll be used in all phases that use that  
</span><br>
<span class="quotelev1">&gt; MPI get.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tags can be specified in one of three forms:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    +foo: means to *add* this tag to the existing/inherited set
</span><br>
<span class="quotelev1">&gt;    -foo: means to *remove* this tag from the existing/inherited set
</span><br>
<span class="quotelev1">&gt;    foo: if any tag does not have a +/- prefix, then the inherited set  
</span><br>
<span class="quotelev1">&gt; is cleared, effectively making the current set of tags be only the  
</span><br>
<span class="quotelev1">&gt; non-prefixed tags and +tags
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    [MPI Get: AAA]
</span><br>
<span class="quotelev1">&gt;    # + and - have little meaning for MPI Get
</span><br>
<span class="quotelev1">&gt;    tags = foo, bar, baz
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    [Test Get: BBB]
</span><br>
<span class="quotelev1">&gt;    # + and - have little meaning for Test Get
</span><br>
<span class="quotelev1">&gt;    tags = yar, fweezle, bozzle
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    [Test Build: CCC]
</span><br>
<span class="quotelev1">&gt;    # Test build inherits tags from MPI Get and Test Get
</span><br>
<span class="quotelev1">&gt;    tags = +fa-schizzle, -yar
</span><br>
<span class="quotelev1">&gt;    # Resulting tag set: foo, bar, baz, fweezle, bozzle, fa-schizzle
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    [Test build: DDD]
</span><br>
<span class="quotelev1">&gt;    # Override everything
</span><br>
<span class="quotelev1">&gt;    tags = yowza, gurple
</span><br>
<span class="quotelev1">&gt;    # Resulting tag set: yowza, gurple
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. For the reporter, I think we only want authenticated users to be  
</span><br>
<span class="quotelev1">&gt; able to create / manipulate tags.  Authentication can be via SVN  
</span><br>
<span class="quotelev1">&gt; username / password or the HTTPS submit username / password; I don't  
</span><br>
<span class="quotelev1">&gt; have strong preferences.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyone can query on tags, of course.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. We should have easy &quot;add these results to a tag&quot; and &quot;remove these  
</span><br>
<span class="quotelev1">&gt; results from a tag&quot; operations, similar to GMail/labels.  I think the  
</span><br>
<span class="quotelev1">&gt; rule should be that if you can show MPI details (i.e., not the  
</span><br>
<span class="quotelev1">&gt; summary page), you can add/remove tags.  Perhaps something as simple  
</span><br>
<span class="quotelev1">&gt; as a text box with two buttons: Add tag, Remove tag.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3a. Example: you drill down to a set of test runs.  You type in &quot;jeff  
</span><br>
<span class="quotelev1">&gt; results&quot; in the text box and click the &quot;add tag&quot; button.  This adds  
</span><br>
<span class="quotelev1">&gt; the tag &quot;jeff results&quot; to all the result rows that are checked (it is  
</span><br>
<span class="quotelev1">&gt; not an error if the &quot;jeff results&quot; tag already exists on some/all of  
</span><br>
<span class="quotelev1">&gt; the result rows).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3b. Example: you drill down to a set of test runs.  You type in &quot;jeff  
</span><br>
<span class="quotelev1">&gt; results&quot; in the text box and click on the &quot;remove tag&quot; button.  This  
</span><br>
<span class="quotelev1">&gt; removes the tag &quot;jeff results&quot; from all the result rows that are  
</span><br>
<span class="quotelev1">&gt; checked (it is not an error if the jeff results&quot; tag is not on some/ 
</span><br>
<span class="quotelev1">&gt; all of the result rows).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. Per Gmail index label listing, it would be nice to see a list of  
</span><br>
<span class="quotelev1">&gt; tags that exist on a given result row.  It could be as simple as  
</span><br>
<span class="quotelev1">&gt; adding another show/hide column for the tags on a given result row.   
</span><br>
<span class="quotelev1">&gt; But it gets a little more complicated because one row many represent  
</span><br>
<span class="quotelev1">&gt; many different results -- do we show the union of tags for all the  
</span><br>
<span class="quotelev1">&gt; rollup rows?  Maybe we can use different colors / attributes to  
</span><br>
<span class="quotelev1">&gt; represent &quot;this tag exists on *some* of the results in this row&quot; vs.  
</span><br>
<span class="quotelev1">&gt; &quot;this tag exists on *all* of the results in this row&quot;...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4a. If the tags are listed as a column, they should also (of course)  
</span><br>
<span class="quotelev1">&gt; be clickable so that if you click on them, you get the entire set of  
</span><br>
<span class="quotelev1">&gt; results associated with that tag.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4b. For every tag on a rollup row, it would be good to be able to say  
</span><br>
<span class="quotelev1">&gt; &quot;apply this tag to every result in this rollup row&quot; (i.e., this tag  
</span><br>
<span class="quotelev1">&gt; had previously only applied to *some* of the results in this rollup  
</span><br>
<span class="quotelev1">&gt; row).  This could be displayed as a little &quot;+&quot; icon next to the tag  
</span><br>
<span class="quotelev1">&gt; name, or somesuch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4c. Similarly, for every tag, it would be good to have a &quot;remove this  
</span><br>
<span class="quotelev1">&gt; tag from every result in this row&quot;.  This could be displayed as a  
</span><br>
<span class="quotelev1">&gt; little &quot;-&quot; icon next to the tag name, or somesuch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4d. Care would need to be taken to ensure that users would not  
</span><br>
<span class="quotelev1">&gt; accidentally click on &quot;+&quot; or &quot;-&quot; icons next to tag names, however.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 5. There should also be a simple way to:
</span><br>
<span class="quotelev1">&gt;     - see all available tags (perhaps including some kind of  
</span><br>
<span class="quotelev1">&gt; indication of how many results that tag represents)
</span><br>
<span class="quotelev1">&gt;     - completely delete a tag from the entire database
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 6. Tags may span multiple phases (install, build, run).  If you click  
</span><br>
<span class="quotelev1">&gt; on a tag that contains results on all three phases, what should  
</span><br>
<span class="quotelev1">&gt; happen?  I think it should be context-sensitive:
</span><br>
<span class="quotelev1">&gt;     - If you are in a summary environment, you get a summary table  
</span><br>
<span class="quotelev1">&gt; showing all relevant results.
</span><br>
<span class="quotelev1">&gt;     - If you are in a single phase environment, you see only the  
</span><br>
<span class="quotelev1">&gt; results in that phase (perhaps with a clickable icon to see the  
</span><br>
<span class="quotelev1">&gt; entire summary table with all the tag's results).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 7. Lots of things can, by default, become tags.  E.g., org name and  
</span><br>
<span class="quotelev1">&gt; platform name can become default tags.  I.e., results that are  
</span><br>
<span class="quotelev1">&gt; submitted will automatically have the org name and platform name  
</span><br>
<span class="quotelev1">&gt; added to the results as tags.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0022.php">Ethan Mallove: "Re: [MTT devel] Performance Graph Notes"</a>
<li><strong>Previous message:</strong> <a href="0020.php">Jeff Squyres: "Re: [MTT devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<li><strong>In reply to:</strong> <a href="0006.php">Jeff Squyres: "[MTT devel] Thoughts on tagging..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0041.php">Josh Hursey: "Re: [MTT devel] Thoughts on tagging..."</a>
<li><strong>Reply:</strong> <a href="0041.php">Josh Hursey: "Re: [MTT devel] Thoughts on tagging..."</a>
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
