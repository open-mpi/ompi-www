<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 24 15:08:11 2007" -->
<!-- isoreceived="20070824190811" -->
<!-- sent="Fri, 24 Aug 2007 15:07:54 -0400" -->
<!-- isosent="20070824190754" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT devel] Thoughts on tagging..." -->
<!-- id="83E0DD85-EB69-430F-B4EA-B5381B7A1ED1_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-24 15:07:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0007.php">Josh Hursey: "Re: [MTT devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<li><strong>Previous message:</strong> <a href="0005.php">Jeff Squyres: "[MTT devel] Testing of perf bakeoff template INI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0021.php">Ethan Mallove: "Re: [MTT devel] Thoughts on tagging..."</a>
<li><strong>Reply:</strong> <a href="0021.php">Ethan Mallove: "Re: [MTT devel] Thoughts on tagging..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I volunteered to do this on the call today.  Here's my thoughts on  
<br>
tagging:
<br>
<p>1. From the client, it would be nice to be able to specify a comma- 
<br>
delimited list of tags at any phase.  Tags would be inherited by  
<br>
successive phases if not explicitly overridden.  E.g., if you specify  
<br>
a &quot;foo&quot; tag in an MPI get, it'll be used in all phases that use that  
<br>
MPI get.
<br>
<p>Tags can be specified in one of three forms:
<br>
<p>&nbsp;&nbsp;&nbsp;+foo: means to *add* this tag to the existing/inherited set
<br>
&nbsp;&nbsp;&nbsp;-foo: means to *remove* this tag from the existing/inherited set
<br>
&nbsp;&nbsp;&nbsp;foo: if any tag does not have a +/- prefix, then the inherited set  
<br>
is cleared, effectively making the current set of tags be only the  
<br>
non-prefixed tags and +tags
<br>
<p>For example:
<br>
<p>&nbsp;&nbsp;&nbsp;[MPI Get: AAA]
<br>
&nbsp;&nbsp;&nbsp;# + and - have little meaning for MPI Get
<br>
&nbsp;&nbsp;&nbsp;tags = foo, bar, baz
<br>
<p>&nbsp;&nbsp;&nbsp;[Test Get: BBB]
<br>
&nbsp;&nbsp;&nbsp;# + and - have little meaning for Test Get
<br>
&nbsp;&nbsp;&nbsp;tags = yar, fweezle, bozzle
<br>
<p>&nbsp;&nbsp;&nbsp;[Test Build: CCC]
<br>
&nbsp;&nbsp;&nbsp;# Test build inherits tags from MPI Get and Test Get
<br>
&nbsp;&nbsp;&nbsp;tags = +fa-schizzle, -yar
<br>
&nbsp;&nbsp;&nbsp;# Resulting tag set: foo, bar, baz, fweezle, bozzle, fa-schizzle
<br>
<p>&nbsp;&nbsp;&nbsp;[Test build: DDD]
<br>
&nbsp;&nbsp;&nbsp;# Override everything
<br>
&nbsp;&nbsp;&nbsp;tags = yowza, gurple
<br>
&nbsp;&nbsp;&nbsp;# Resulting tag set: yowza, gurple
<br>
<p>2. For the reporter, I think we only want authenticated users to be  
<br>
able to create / manipulate tags.  Authentication can be via SVN  
<br>
username / password or the HTTPS submit username / password; I don't  
<br>
have strong preferences.
<br>
<p>Anyone can query on tags, of course.
<br>
<p>3. We should have easy &quot;add these results to a tag&quot; and &quot;remove these  
<br>
results from a tag&quot; operations, similar to GMail/labels.  I think the  
<br>
rule should be that if you can show MPI details (i.e., not the  
<br>
summary page), you can add/remove tags.  Perhaps something as simple  
<br>
as a text box with two buttons: Add tag, Remove tag.
<br>
<p>3a. Example: you drill down to a set of test runs.  You type in &quot;jeff  
<br>
results&quot; in the text box and click the &quot;add tag&quot; button.  This adds  
<br>
the tag &quot;jeff results&quot; to all the result rows that are checked (it is  
<br>
not an error if the &quot;jeff results&quot; tag already exists on some/all of  
<br>
the result rows).
<br>
<p>3b. Example: you drill down to a set of test runs.  You type in &quot;jeff  
<br>
results&quot; in the text box and click on the &quot;remove tag&quot; button.  This  
<br>
removes the tag &quot;jeff results&quot; from all the result rows that are  
<br>
checked (it is not an error if the jeff results&quot; tag is not on some/ 
<br>
all of the result rows).
<br>
<p>4. Per Gmail index label listing, it would be nice to see a list of  
<br>
tags that exist on a given result row.  It could be as simple as  
<br>
adding another show/hide column for the tags on a given result row.   
<br>
But it gets a little more complicated because one row many represent  
<br>
many different results -- do we show the union of tags for all the  
<br>
rollup rows?  Maybe we can use different colors / attributes to  
<br>
represent &quot;this tag exists on *some* of the results in this row&quot; vs.  
<br>
&quot;this tag exists on *all* of the results in this row&quot;...?
<br>
<p>4a. If the tags are listed as a column, they should also (of course)  
<br>
be clickable so that if you click on them, you get the entire set of  
<br>
results associated with that tag.
<br>
<p>4b. For every tag on a rollup row, it would be good to be able to say  
<br>
&quot;apply this tag to every result in this rollup row&quot; (i.e., this tag  
<br>
had previously only applied to *some* of the results in this rollup  
<br>
row).  This could be displayed as a little &quot;+&quot; icon next to the tag  
<br>
name, or somesuch.
<br>
<p>4c. Similarly, for every tag, it would be good to have a &quot;remove this  
<br>
tag from every result in this row&quot;.  This could be displayed as a  
<br>
little &quot;-&quot; icon next to the tag name, or somesuch.
<br>
<p>4d. Care would need to be taken to ensure that users would not  
<br>
accidentally click on &quot;+&quot; or &quot;-&quot; icons next to tag names, however.
<br>
<p>5. There should also be a simple way to:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- see all available tags (perhaps including some kind of  
<br>
indication of how many results that tag represents)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- completely delete a tag from the entire database
<br>
<p>6. Tags may span multiple phases (install, build, run).  If you click  
<br>
on a tag that contains results on all three phases, what should  
<br>
happen?  I think it should be context-sensitive:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- If you are in a summary environment, you get a summary table  
<br>
showing all relevant results.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- If you are in a single phase environment, you see only the  
<br>
results in that phase (perhaps with a clickable icon to see the  
<br>
entire summary table with all the tag's results).
<br>
<p>7. Lots of things can, by default, become tags.  E.g., org name and  
<br>
platform name can become default tags.  I.e., results that are  
<br>
submitted will automatically have the org name and platform name  
<br>
added to the results as tags.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0007.php">Josh Hursey: "Re: [MTT devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<li><strong>Previous message:</strong> <a href="0005.php">Jeff Squyres: "[MTT devel] Testing of perf bakeoff template INI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0021.php">Ethan Mallove: "Re: [MTT devel] Thoughts on tagging..."</a>
<li><strong>Reply:</strong> <a href="0021.php">Ethan Mallove: "Re: [MTT devel] Thoughts on tagging..."</a>
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
